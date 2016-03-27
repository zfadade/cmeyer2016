<?php	

require_once('../includes/config.php');

function updateConsent($userEmail, $consent)  {
	try {
		global $db;

		// update consent info in database
		$stmt = $db->prepare('UPDATE user_info SET consent = :consent, consentModDate = NOW() WHERE courriel = :userEmail') ;
		$retVal = $stmt->execute(array(
			':userEmail' => $userEmail,
			':consent' => $consent
		));

		if ($stmt->rowCount() > 0) {
			// TODO:  Get sys_log working
			// sys_log(LOG_INFO, "Successfully updated consent for user $userEmail to $consent");
			sendToSlack(SLACK_CONSENT_URL, "Updated consent for $userEmail to $consent");
		}
		else {
			$errMsg = "ERROR! Unable to update consent for $userEmail to $consent";
			error_log($errMsg, 1, "zfadade@yahoo.com");
      		sendToSlack(SLACK_CONSENT_URL, $errMsg);
		}

		// } else {	

		// 	// //insert into DB
		// 	// $stmt = $db->prepare('UPDATE userEmail SET username = :username, email = :email WHERE memberID = :memberID') ;
		// 	// $stmt->execute(array(
		// 	// 	':username' => $username,
		// 	// 	':email' => $email,
		// 	// 	':memberID' => $memberID
		// 	// ));

		// }

	} catch(PDOException $e) {
		$errMsg = "ERROR! DB exception when updating $userEmail to $consent: " . $e->getMessage();
		error_log($errMsg, 1, "zfadade@yahoo.com");
	    sendToSlack(SLACK_ERRLOG_URL, $errMsg);
	}
}
