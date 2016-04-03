<?php
require_once("includes/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "Form submitted<p>";
  doConsentMailings(2);
}

function doConsentMailings($limit)  {

  global $db;

  try {

  // update consent info in database
  // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
  $stmt = $db->prepare('SELECT id, prenom, nom, courriel FROM ' . CONSENT_USER_TABLE . ' WHERE consent is NULL LIMIT :limit');
  $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach ($rows as $row) {
    echo "<p>";
    print_r($row);
    sendEmail($row);
  }

  } catch(PDOException $e) {
      $errMsg = 'ERROR! DB exception when querying ' . CONSENT_USER_TABLE . ': ' . $e->getMessage();
      print($errMsg);

    }
}

function sendEmail($row) {
 
  extract($row);

  $to = $courriel;
  $from = CONSENT_EMAIL_SENDER;
  $bcc = CONSENT_EMAIL_SENDER;

// &agrave; 
  $msgBody = <<< MAIL_BODY_END
  Bonjour, 

  Selon la Loi canadienne anti-pourriel (LPCA), vous avez la possibilité d’accepter ou de refuser de continuer à recevoir les NOUVELLES infolettres et autres informations de Carole Meyer Communication organisationnelle. 

  POUR ACCEPTER : http://conseil-carolemeyer.ca/2016/consentForm.php?cid=$courriel

  L’équipe de Carole Meyer Communication organisationnelle vous remercie !

MAIL_BODY_END;

  $sujet = "Du nouveau à Carole Meyer Communication organisationnelle !";
  // $sujet = "Du nouveau &agrave; Carole Meyer Communication organisationnelle !";

  $headers = "From: " . $from . PHP_EOL .
            "Reply-To: " . $from . PHP_EOL .
            "Bcc: " . $bcc . PHP_EOL .
            "Content-Type: text/plain; charset=utf-8". PHP_EOL;

  echo "Sending mail to " . $to . "<p>Subjet: $sujet  <p>body:  " . htmlspecialchars($msgBody) . "<p>headers: $headers";

  mail($to, $sujet, $msgBody, $headers);

}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CONSENT</title>
<meta name="Description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dancing Script">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/stylecmco.css"> -->

<p>
    <form method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" accept-charset="UTF-8">
      <h3>Send out consent emails</h3>
        <button type="submit" class="btn btn-default">Envoyez</button> 
    </form>
</p>
</body>
</html>

