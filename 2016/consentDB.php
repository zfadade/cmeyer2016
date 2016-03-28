<?php	

require_once('../includes/config.php');

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
			sendToSlack(SLACK_TESTING_URL, "Updated consent for $clientEmail ($clientCode) to $consent");
			//sendToSlack(SLACK_CONSENT_URL, "Updated consent for $clientEmail ($clientCode) to $consent");
		}
		else {
			$errMsg = "ERROR! Unable to update consent for $clientEmail ($clientCode) to $consent";
			print("errMsg");
			error_log($errMsg, 1, "zfadade@yahoo.com");
			sendToSlack(SLACK_TESTING_URL, $errMsg);
      		//sendToSlack(SLACK_CONSENT_URL, $errMsg);
		}

		// } else {	

		// 	// //insert into DB
		// 	// $stmt = $db->prepare('UPDATE user_info SET username = :username, email = :email WHERE memberID = :memberID') ;
		// 	// $stmt->execute(array(
		// 	// 	':username' => $username,
		// 	// 	':email' => $email,
		// 	// 	':memberID' => $memberID
		// 	// ));

		// }

	} catch(PDOException $e) {
		$errMsg = "ERROR! DB exception when updating $clientEmail ($clientCode) to $consent: " . $e->getMessage();
		print($errMsg);
		error_log($errMsg, 1, "zfadade@yahoo.com");
	    sendToSlack(SLACK_ERRLOG_URL, $errMsg);
	}
}

	// function getEmailFromCode($clientCode) {
	// 	global $db;

	// 	try {
	// 		$stmt = $db->prepare('SELECT courriel FROM user_info WHERE id = :clientCode') ;
	// 		$retVal = $stmt->execute(array(
	// 			':clientCode' => $clientCode
	// 	));

	// 	} catch(PDOException $e) {
	// 	}

	// }
