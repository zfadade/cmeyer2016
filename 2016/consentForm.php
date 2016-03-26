<?php
require_once("../includes/php_utils.php");
require_once("../includes/config.php");
require_once("consentDB.php");

// i18n:
$language = setLanguage();

// The form has been submitted. Dis "merci" ...
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oui_non = filter_input(INPUT_POST, 'oui_non', FILTER_SANITIZE_STRING);
    $saysYes = $oui_non == "oui" ? 1 : 0;
    $clientName = defaultVal($_SESSION, "clientName", "");
    $clientEmail = defaultVal($_SESSION, "clientEmail", "");
    $clientCode = defaultVal($_SESSION, "clientCode", "");
  
    updateConsent($clientEmail, $saysYes); 
    if ($oui_non == "oui") {
      header('Location: consentMerci.php');
    }
    else {
      header('Location: nonConsentMerci.php');
    }
    
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CAROLE MEYER - CONTACT</title>
<meta name="Description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dancing Script">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/consentement.css">
<script type='text/javascript' src='js/jquery-1.9.1.min.js'></script>
<!-- <script type='text/javascript' src='js/script.js'></script>
<script type='text/javascript' src='js/load_header.js'></script> -->
<script type='text/javascript' src='js/jssor.slider.min.js'></script>
  
</head>

<body>

<div class='container loi'>
<?php                                                                              
// Have sender info put clientEmail, etc. into email somehow                       
     $_SESSION["clientName"] = "Zebulah";                                    
     $_SESSION["clientEmail"] = "zfadade@yahoo.com";                         
     $_SESSION["clientCode"] = "12345";                                      
?>
      <div class='col-md-12 col-sm-12 col-xs-12 pascadre'>       
      <div class='row'>
        <p id='logoC'><img src="logo/logo.png"></p>
      </div>

        <div class='col-md-12 col-sm-12 col-xs-12 pascadre'>
          <div class='row loipourriel'>
      <p><h3 class='h33'>CMCO – CONSENTEMENT INFOLETTRES</h3></p>
      <p class='slogan'>Loi anti-pourriel</p>
        </div>
        
        <div class='row loipourriel'>
        <p>J’accepte de recevoir les infolettres et autres informations
         de Carole Meyer Communication organisationnelle.</p> 

         <form name="OuiNonForm" method="post" 
         action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
          <!--  ASK FOR ACCEPTING EMAIL -->
            <p>
            <div class="checkbox">
              <label class='active ouinon'>
              <input type="radio" name="oui_non" value="oui"  checked="checked">&nbsp;Oui
               </label>
           
              <label>
              <input type="radio" name="oui_non" value="non"> &nbsp;Non
               
              </label>
          </div> </p>
           <br> 
         

          <button type="submit" class="btn btn-default">Envoyez</button> 
  
  </form>
      </div>
      </div>
        
 
</div> <!--end of container  -->

<!-- Bootstrap core Javascript files
======================================================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
