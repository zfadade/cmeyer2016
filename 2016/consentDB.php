<?php	

require_once('../includes/config.php');

function updateConsent($userEmail, $consent)  {
	try {
		global $db;

		echo "Updating consent for $userEmail to $consent\n";

		// update consent info in database
		$stmt = $db->prepare('UPDATE user_info SET consent = :consent, consentModDate = NOW() WHERE userEmail = :userEmail') ;
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
			error_log("ERROR! Unable to update consent for user $userEmail to $consent", 1, "zfadade@yahoo.com");
      		sendToSlack(SLACK_CONSENT_URL, "ERROR! Unable to update consent for $userEmail to $consent");
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
		// TODO:  log error
		echo "Unable to update consent for user $userEmail to $consent: " . $e->getMessage();
	    echo $e->getMessage();
	}
}
