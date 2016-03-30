<?php
require_once("../includes/php_utils.php");
require_once("../includes/config.php");
require_once("consentDB.php");

/*
Uses these variables, which should be defined in the including file:
$showCommentaire = false;
$showInfolettreOuiNon = false
*/  

// i18n:
$language = setLanguage();
$accepteRecevoir = _("AccepteRecevoir");
$oui = _("Oui");
$non = _("Non");
$envoyez = _("Envoyez");


$thisUrl = htmlspecialchars($_SERVER["PHP_SELF"]);
$webPage = basename($thisUrl);
// print "thisUrl: $thisUrl   webPage:  $webPage)";
// Define values for user info entered in contact form
$nomErr = $prenomErr = $courrielErr = $commentaireErr = "";
$nom = defaultVal($_SESSION, "nom", "");
$prenom = defaultVal($_SESSION, "prenom", "");
$courriel = defaultVal($_SESSION, "courriel", "");
$commentaire = defaultVal($_SESSION, "commentaire", "");

// print "Top of page:  nom: $nom, prenom:  $prenom, courriel: $courriel, commentaire: $commentaire";
// var_dump($_SESSION);

$saysYes = null;


// The form has been submitted.  Do error correction, and act on data if it's good
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verify nom
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    if (empty($nom)) {

        $nomErr = _('NomRequired');
    }

    // Verify prenom
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
    if (empty($prenom)) {
        $prenomErr = _('PrenomRequired');
    }

    // Verify courriel
    $courriel = filter_input(INPUT_POST, 'courriel', FILTER_SANITIZE_STRING);
    if (empty($courriel)) {
        $courrielErr = _('CourrielRequired');
    } 
    else if (!filter_var($courriel, FILTER_VALIDATE_EMAIL)) {
        $courrielErr = _('CourrielBad'); 
        $courriel = filter_input(INPUT_POST, 'courriel', FILTER_SANITIZE_STRING);
    }

    if ($showCommentaire) {
      // Verify commentaire
      $commentaire = cleanInput(INPUT_POST, 'commentaire', FILTER_SANITIZE_STRING);
       // if (empty($commentaire)) {
       //    $commentaireErr = _('CommentaireRequired');
      // } 
    }
    
    if ($showInfolettreOuiNon) {  // Get oui/non response
      $oui_non = filter_input(INPUT_POST, 'oui_non', FILTER_SANITIZE_STRING);
      $saysYes = $oui_non == "oui" ? 1 : 0;
    }
  
    if (empty($nomErr) and empty($prenomErr) and empty($courrielErr) and empty($commentaireErr)) {
      print "No errors in form :-)";
      // No errors :-)
      // Insert contact into DB
      insertContact($nom, $prenom, $courriel, $commentaire, $saysYes, $webPage, $language);

      // Send email
      $nomComplet = $prenom . " " . $nom;
      $sujet = "$nomComplet . sent a commentaire de conseil-caroleMayer.ca!";
      $headers = 'From: ' . $courriel . PHP_EOL ;
      // $headers = "From: " . $courriel . PHP_EOL .
      //     "Reply-To: " . $courriel . PHP_EOL .
      //     "X-Mailer: PHP/" . phpversion();

      // send the mail
      mail (CONTACT_EMAIL_RECIPIENT, $sujet, $commentaire, $headers);
    
      // We're done.  Clear data from session
      $nom = $prenom = $courriel = $commentaire = "";
      $_SESSION["nom"] = $_SESSION["prenom"] = $_SESSION["courriel"] = $_SESSION["commentaire"] = "";
    } else {
      print "Oops, problem in form.  nom: $nom, prenom:  $prenom, courriel: $courriel, commentaire: $commentaire";
      // Data was bad.  Save variables in session so they'll be displayed when form is redisplayed
      $_SESSION["nom"] = $nom; 
      $_SESSION["prenom"] = $prenom; 
      $_SESSION["courriel"] = $prenom; 
      $_SESSION["commentaire"] = $commentaire;  
      //var_dump($_SESSION);


      //$nom = $prenom = $courriel = $commentaire = "";
  } 
}

echo  <<< NAME_PRENOM_END
    <form method='post' action="$thisUrl" >
    <h3>Contactez-nous</h3>

      <div class="form-group">
        <label for="contact-name">* Nom</label>
        <input type="name" class="form-control" id="contact-name" name="nom" value="$nom">
        <span class="error">$nomErr</span>
      </div>

      <div class="form-group">
        <label for="contact-name">* Pr&eacute;nom</label>
        <input type="name" class="form-control" id="contact-name" name="prenom" value="$prenom">
         <span class="error">$prenomErr</span>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">* Courriel</label>
        <input type="email" class="form-control" id="email" name="courriel"  value="$courriel">
        <span class="error">$courrielErr</span>
      </div>

NAME_PRENOM_END;

if (isset($showCommentaire) && ($showCommentaire === true)) {
echo <<< COMMENTAIRE_END
  <div class="form-group">
    <label for="textarea">Commentaire</label>
    <input type="textarea" class="form-control" id="comment" name="commentaire"  value="$commentaire" placeholder="Commentaire">
    <span class="error">$courrielErr</span>
  </div>
  <br>
COMMENTAIRE_END;
}


if (isset($showInfolettreOuiNon) && ($showInfolettreOuiNon === true)) {
echo <<< OUI_NON_END
      <!--  ASK FOR ACCEPTING EMAIL -->
        <p>
            <div class="checkbox">
              <p> $accepteRecevoir</b>.</p>
              <label class='active ouinon'>
                <input type="radio" name="oui_non" value="oui"  checked="checked">&nbsp;$oui
              </label>
           
              <label>
                <input type="radio" name="oui_non" value="non"> &nbsp;$non
              </label>
            </div> 
        </p>
       <br> 
OUI_NON_END;
}

echo <<< SUBMIT_END
      <button type="submit" class="btn btn-default">$envoyez</button> 
  </form>
SUBMIT_END;

?>