<?php

if (!isset($_SESSION)) 
{ 
     session_start(); 
} 
include_once('config.php');
include_once('../2016/vendor/autoload.php');


# Define program-wide constanats
define("FRENCH", "fr");
define("ENGLISH", "en");
define("BLOGUE", "BLOGUE_");

// For now, set the locale every time.  May get smarter later
function setLanguage() {
	$defaultLang = "fr_FR";

	$language = defaultVal($_SESSION, "language", $defaultLang);

	if (isset($_GET["lang"]))
	{
	    $lang = filter_input(INPUT_GET, 'lang', FILTER_SANITIZE_STRING);
	    if (strpos($lang, "en") === 0) {
	        $language = "en_US";
	    }
	    else {
	    	$language = $defaultLang;
	    }
	}

	putenv("LANG=" . $language);
	setlocale(LC_ALL, $language);
	//echo "Setting language to " . $language;

	// Set the text domain as "messages"
	$domain = "messages";
	bindtextdomain($domain, "locale");

	//bind_textdomain_codeset($domain, 'UTF-8');
	textdomain($domain);

	// Just return fr or en
	return substr($language, 0, 2) === "en" ? ENGLISH : FRENCH;
}


// This is needed to call a function from a Heredoc
$hereFunc = function($fn) {
	return $fn;
};


function defaultVal($array, $key, $default) {
    return isset($array[$key]) ? $array[$key] : $default;
}


function getBlogId($postId) {
    return BLOGUE . $postId;
}

// Is this needed?  Or is filter_input() sufficient ?
// INPUT_POST, 'nom', FILTER_SANITIZE_STRING
function cleanInput($input_array, $var, $filter_type) {
	$data = filter_input(INPUT_POST, $var, $filter_type);

  // Handle accents

	$data2 = htmlspecialchars($data);
  // $data2 = html_entity_decode(utf8_decode($data));
  return $data2;
}


function getUrlForOtherLang($lang, $stuffBeforeAnchorEnds ) {
	if ($lang == ENGLISH) {
		$langForUrl = "fr";
		$langName = "Fran&ccedil;ais";
	}
	else {
		$langForUrl = "en";
		$langName = "English";
	}

	return "<a href="  . full_path()  . "?lang=" . $langForUrl . ">" . $langName . $stuffBeforeAnchorEnds .  "</a>";
}

// http://stackoverflow.com/questions/6768793/get-the-full-url-in-php
function full_path()
{
    $s = &$_SERVER;
    $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
    $sp = strtolower($s['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
    $port = $s['SERVER_PORT'];
    $port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
    $host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
    $host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
    $uri = $protocol . '://' . $host . $s['REQUEST_URI'];
    $segments = explode('?', $uri, 2);
    $url = $segments[0];
    return $url;
}


function sendToSlack($url, $msg) {
    // Instantiate with defaults, so all messages created
    // will be sent from 'Cyril' and to the #accounting channel
    // by default. Any names like @regan or #channel will also be linked.
    $settings = [
            'username' => 'Cyril',
             'channel' => '#accounting',
              'link_names' => true
      ];
    
    // Instantiate without defaults
    // $url="https://hooks.slack.com/services/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";
    $client = new Maknz\Slack\Client($url);
    $client->send($msg);
}

function insertContact($nom, $prenom, $courriel, $commentaire, $consent, $webPage, $lang)  {
	try {
		global $db;

		$stmt = $db->prepare("INSERT INTO contacts_from_web (nom,prenom,courriel,commentaire,consent,webPage,lang,insertDate) VALUES (:prenom, :nom, :courriel, :commentaire, :consent, :webPage, :lang, now())");

		$stmt->bindParam(':nom', $nom);
		$stmt->bindParam(':prenom', $prenom);
		$stmt->bindParam(':courriel', $courriel);	
		$stmt->bindParam(':commentaire', $commentaire);	
		$stmt->bindParam(':consent', $consent);
		$stmt->bindParam(':webPage', $webPage);
		$stmt->bindParam(':lang', $lang);

		$stmt->execute();

		if ($stmt->rowCount() > 0) {
			$msg = "Added to DB: $nom $prenom $courriel \"$commentaire\" $consent to contacts_from_web from host $_SERVER[HTTP_HOST]";
			// TODO:  Get sys_log working
			// sys_log(LOG_INFO, msg);
			sendToSlack(SLACK_TESTING_URL, $msg);
			//sendToSlack(SLACK_CONSENT_URL, "Updated consent for $clientEmail ($clientCode) to $consent");
		}
		else {
			$errMsg = "ERROR! Unable to add $prenom $courriel $commentaire $consent to contacts_from_web in DB";
			error_log($errMsg, 1, "zfadade@yahoo.com");
			sendToSlack(SLACK_TESTING_URL, $errMsg);
      		//sendToSlack(SLACK_CONSENT_URL, $errMsg);
		}
	}
	catch(PDOException $e) {
		// QLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'abc@xyz.com' for key 'courriel'
		$errMsg = "ERROR! DB exception when adding $nom $prenom $$courriel $commentaire $consent to contacts_from_web in DB " . $e->getMessage();
		error_log($errMsg, 1, "zfadade@yahoo.com");
	    sendToSlack(SLACK_TESTING_URL, $errMsg);
	}
}

function updateConsent($clientEmail, $clientCode, $consent)  {
	try {
		global $db;

		// update consent info in database
		$stmt = $db->prepare('UPDATE user_info SET consent = :consent, modDate = NOW() WHERE courriel = :clientEmail') ;
		$retVal = $stmt->execute(array(
			':clientEmail' => $clientEmail,
			':consent' => $consent
		));

		if ($stmt->rowCount() > 0) {
			$msg = "Successfully updated consent for user $clientCode to $consent";
			// TODO:  Get sys_log working
			// sys_log(LOG_INFO, msg);
			print($msg);
			// sendToSlack(SLACK_TESTING_URL, "Updated consent for $clientEmail ($clientCode) to $consent");
			sendToSlack(SLACK_CONSENT_URL, "Updated consent for $clientEmail ($clientCode) to $consent");
		}
		else {
			$errMsg = "ERROR! Unable to update consent for $clientEmail ($clientCode) to $consent";
			print("errMsg");
			error_log($errMsg, 1, "zfadade@yahoo.com");
			// sendToSlack(SLACK_TESTING_URL, $errMsg);
      		sendToSlack(SLACK_CONSENT_URL, $errMsg);
		}
	} catch(PDOException $e) {
		$errMsg = "ERROR! DB exception when updating $clientEmail ($clientCode) to $consent: " . $e->getMessage();
		print($errMsg);
		error_log($errMsg, 1, "zfadade@yahoo.com");
	    sendToSlack(SLACK_ERRLOG_URL, $errMsg);
	}
}
?>
