<?php	

require_once('../includes/config.php');

function insertContact($nom, $prenom, $courriel, $consent)  {
	try {
		global $db;

		$stmt = $db->prepare("INSERT INTO contacts_from_web (nom,prenom,courriel,consent,consentModDate) VALUES (:prenom, :nom, :courriel, :consent, now())");

		$stmt->bindParam(':nom', $nom);
		$stmt->bindParam(':prenom', $prenom);
		$stmt->bindParam(':courriel', $courriel);	
		$stmt->bindParam(':consent', $consent);

		$stmt->execute();

		if ($stmt->rowCount() > 0) {
			$msg = "Successfully added $nom $prenom $courriel $consent to contacts_from_web in DB";
			// TODO:  Get sys_log working
			// sys_log(LOG_INFO, msg);
			print($msg);
			sendToSlack(SLACK_TESTING_URL, $msg);
			//sendToSlack(SLACK_CONSENT_URL, "Updated consent for $clientEmail ($clientCode) to $consent");
		}
		else {
			$errMsg = "ERROR! Unable to add $prenom $courriel $consent to contacts_from_web in DB";
			print("errMsg");
			error_log($errMsg, 1, "zfadade@yahoo.com");
			sendToSlack(SLACK_TESTING_URL, $errMsg);
      		//sendToSlack(SLACK_CONSENT_URL, $errMsg);
		}
	}
	catch(PDOException $e) {
		// QLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'abc@xyz.com' for key 'courriel'
		$errMsg = "ERROR! DB exception when adding $nom $prenom $$courriel $consent to contacts_from_web in DB " . $e->getMessage();
		print($errMsg);
		error_log($errMsg, 1, "zfadade@yahoo.com");
	    sendToSlack(SLACK_TESTING_URL, $errMsg);
	}
}

function updateConsent($clientEmail, $clientCode, $consent)  {
	try {
		global $db;

		// update consent info in database
		$stmt = $db->prepare('UPDATE user_info SET consent = :consent, consentModDate = NOW() WHERE courriel = :clientEmail') ;
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