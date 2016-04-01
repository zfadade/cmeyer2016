<?php
// header('Content-Type: text/html; charset=utf-8');
require_once("../includes/php_utils.php");

// i18n:
$language = setLanguage();
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
<link rel="stylesheet" href="css/stylecmco.css">
<script type='text/javascript' src='js/jquery-1.9.1.min.js'></script>
<!-- <script type='text/javascript' src='js/script.js'></script>
<script type='text/javascript' src='js/load_header.js'></script> -->
<script type='text/javascript' src='js/jssor.slider.min.js'></script>
  
</head>

<body>

<div class='container'>
    <header class='page-header'>
           <?php require_once 'header.php'; ?>
    </header> 

  <nav class="navbar navbar-default">
           <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#"><img src="logo/logo2016.png"/></a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Bienvenue</a></li>
        <li class="dropdown">
          <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="services.php">Services</a></li>
            <li role="separator" class="divider"></li> 
            <li><a href="ateliers.php">Ateliers</a></li> 
            <li role="separator" class="divider"></li>
            <li><a href="consultations.php">Consultations</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clients <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="clients.php">Clients</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="listclients.php">Liste des organisations</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="temoignages.php">T&eacute;moignages</a></li>
            
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">M&eacute;dia <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="media.php">M&eacute;dia</a></li> 
            <li role="separator" class="divider"></li>
            <li><a href="video.php">Vid&eacute;os</a></li> 
            <li role="separator" class="divider"></li>
            <li><a href="infolettre.php">Infolettres</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="lien.php">Liens utiles</a></li>
          </ul>
        </li>
          <li><a href="apropos.php">&Agrave; propos de nous<span class="sr-only">(current)</span></a></li>
          <li class='active'><a href="contact.php">Contact<span class="sr-only">(current)</span></a></li>
          <li><?php print getUrlForOtherLang($language, "<span class='sr-only'>(current)</span>"); ?> </li>
        </ul>
          <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left" role="search">Contac
        <div class="form-group">
          <input type="text" class="form-control" id="loupe">
        </div>
        <!-- <button type="submit" class="btn btn-default">Submit</button> -->
        </form>
      </ul>
    
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
  </nav> 
<!-- <div class='container'> -->
                  
      <div class='row touteslespages one-edge-shadow'>
        <?php require_once 'slogan.php'; ?>
      </div>
        
      <div class='col-md-4 col-sm-4 col-xs-12 '>   
        <h3 class='h333'><?php echo _("Temoignages"); ?></h3>
        <div class='clientfeedback'>
         <p >&quot;J’ai été surprise par ta facilité à nous faire progresser, à utiliser l’humour pour dédramatiser, à mentionner en toute
          subtilité nos points à améliorer, à nous encourager! C’était bien efficace pour tout le groupe! &quot;
          </p>
                <p class='client'>H&eacute;l&egrave;ne</p>
        </div>
        <br>
        <div>
         <p><img  src='photos/carole-meyer2.jpg'  class='img-responsive'></p>
          </div>
          
          <br><br><br>
        <div class='clientfeedbackcontact'>
         <p>&quot;L’action est le meilleur remède contre vos peurs&quot;</p>
         <p class='client'>Dominique Glocheux</p>        
        </div>

     
      </div><!-- end of col left -->


   <div class='col-md-8 coKBl-sm-8 col-xs-12 services'>
        <h3 class='h333'>Contact</h3>
      <div class='row'> 
      <div class='col-md-5 col-sm-5 col-xs-12 '> 
            <p><center><img  src='photos/pages/skydiving.jpg'  class='img-responsive'></center></p>
      </div>
       <div class='col-md-7 col-sm-7 col-xs-12 services'>
         <p>Vous gérez votre entreprise depuis plusieurs années et vous vous demandez comment faire plus et mieux pour rester compétitif ?</p> 
<p>Sachez qu’une communication inadaptée, une interaction nuisible et un leadership inadéquat causent une baisse de performance et une perte des savoirs faire fort coûteuses pour les entreprises. 
Vous pouvez décider de rehausser la valeur de votre entreprise.</p>
Nous pouvons vous aider à tonifier votre communication organisationnelle, créer des liens de confiance et renforcer votre leadership. 

        </p>
       </div>
      
      </div><!-- end of first row right part -->
</div><!-- end of first col right part -->
<br>

<div class='col-md-5 col-sm-5 col-xs-12 contactPage pull-right'>
  <div class='row'>  

    <!-- Display contact form -->
    <?php
      $formTitle = _("ContactezNous");
      $showCommentaire = true;
      $showInfolettreOuiNon = true;
      include('contactForm.php');
     ?>

   </div><!-- end of row 2right part -->
</div><!-- end of col md-8 right -->

      <div class='clearfix'></div>

    
    <footer>
             <?php require_once 'footer.php'; ?>
    </footer> <!--end of footer -->



</div> <!--end of container  -->

<!-- Bootstrap core Javascript files
======================================================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
