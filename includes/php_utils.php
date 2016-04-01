<?php
include_once('config.php');
include_once('../2016/vendor/autoload.php');

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

// Is this needed?  Or is filter_input() sufficient ?
function cleanInput($input_array, $var, $filter_type) {
	$data = filter_input(INPUT_POST, $var, $filter_type);

  // Handle accents
	return htmlspecialchars($data, ENT_NOQUOTES, 'UTF-8');
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
    // $settings = [
    //         'username' => 'Cyril',
    //          'channel' => '#accounting',
    //           'link_names' => true
    //   ];

	if (USE_SLACK) {
	    try {
			    // Instantiate without defaults
			    $client = new Maknz\Slack\Client($url);
			    $client->send($msg);
		}
	    catch (Exception $e) {
			// QLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'abc@xyz.com' for key 'courriel'
			$errMsg = "ERROR! Unable to send to Slack.  Msg: $msg  Exception: " .  $e->getMessage();
			error_log($errMsg, 1, ERROR_EMAIL_RECIPIENT);
		}
	}
}

function insertContact($nom, $prenom, $courriel, $commentaire, $consent, $webPage, $lang, $contactInfo)  {

	$contactInfoWithCommentaire = "$contactInfo \"$commentaire\"";
	$slackMsg = "Nouveau contact: $contactInfoWithCommentaire";
	sendToSlack(SLACK_TESTING_URL, htmlspecialchars_decode($slackMsg));

	if (USE_DATABASE) {
		try {
			global $db;

			$stmt = $db->prepare("INSERT INTO contacts_from_web (nom,prenom,courriel,commentaire,consent,webPage,lang,insertDate) VALUES (:nom, :prenom, :courriel, :commentaire, :consent, :webPage, :lang, now())");

			$stmt->bindParam(':nom', $nom);
			$stmt->bindParam(':prenom', $prenom);
			$stmt->bindParam(':courriel', $courriel);	
			$stmt->bindParam(':commentaire', $commentaire);	
			$stmt->bindParam(':consent', $consent);
			$stmt->bindParam(':webPage', $webPage);
			$stmt->bindParam(':lang', $lang);


			$stmt->execute();

			if ($stmt->rowCount() <= 0) {
				$errMsg = "ERROR! Unable to add to DB: $contactInfoWithCommentaire";
				error_log($errMsg, 1, ERROR_EMAIL_RECIPIENT);

				sendToSlack(SLACK_TESTING_URL, $errMsg);
	      		//sendToSlack(SLACK_CONSENT_URL, $errMsg);
			}
		}
		catch (PDOException $e) {
			// QLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'abc@xyz.com' for key 'courriel'
			$errMsg = "ERROR! DB exception when adding: $contactInfoWithCommentaire. Exception: " .  $e->getMessage();
			error_log($errMsg, 1, ERROR_EMAIL_RECIPIENT);
		    sendToSlack(SLACK_TESTING_URL, $errMsg);
		}
	}
}

?>
