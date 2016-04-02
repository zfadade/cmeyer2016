<?php
require_once("../includes/php_utils.php");

// i18n:
$language = setLanguage();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CAROLE MEYER - LISTES CLIENTS</title>
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
        <li class="dropdown" >
          <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="services.php">Services</a></li>
            <li role="separator" class="divider"></li> 
            <li><a href="ateliers.php">Ateliers</a></li> 
            <li role="separator" class="divider"></li>
            <li><a href="consultations.php">Consultations</a></li>
          </ul>
        </li>

        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clients <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="clients.php">Clients</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="listclients.php">Liste des organisations</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="temoignages.php"><?php echo _("Temoignages"); ?></a></li>
            
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
          <li><a href="#">&Agrave; propos de nous<span class="sr-only">(current)</span></a></li>
          <li><a href="#">Contact<span class="sr-only">(current)</span></a></li>
          <li><?php print getUrlForOtherLang($language, "<span class='sr-only'>(current)</span>"); ?> </li>

        </ul>
          <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left" role="search">
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
        <div class='clientfeedbackList'>
         <p >&quot;Merci encore pour la formation de notre équipe. Étant une personne enjouée
de nature, je suis maintenant capable de voir à quel point nous pouvons
avoir le contrôle de la situation avec l’hémisphère droit du cerveau. J’ai
récemment eu une rencontre stratégique avec un partenaire d’affaires.
J’avais beaucoup d’appréhension, mais finalement tout s’est très bien déroulé !&quot;
              </p>
                <p class='client'>Sylvie</p>
        </div>

      <!-- Display contact form -->
      <?php
        $formTitle = _("PourEtreContacte");
        $showCommentaire = false;
        $showInfolettreOuiNon = false;
        include('contactForm.php');
      ?>
     
      </div><!-- end of col left -->


      <div class='col-md-8 col-sm-8 col-xs-12'>
      <h3 class='h333'><?php echo _("OrgPriveEtPublique"); ?></h3>
      <div class='row'> 
      <div class='col-md-5 col-sm-5 col-xs-12 services'> 
            <p><center><img  src='photos/pages/mtldt.jpg'  class='img-responsive'></center></p>
            <p><center><img  src='photos/pages/hydroqc1.jpg'  class='img-responsive'></center></p>
            <p><center><img  src='photos/pages/jardinscomplexe.jpg'  class='img-responsive'></center></p>
      </div>
       <div class='col-md-7 col-sm-7 col-xs-12 services'>
         <p><ul>
                    <li>Agence canadienne d’inspection des aliments</li>
                    <li>Adecco</li> 
                    <li>A&eacute;roports de Montr&eacute;al</li>
                    <li>Ambassades &eacute;trang&egrave;res</li> 
                    <li>Banque Nationale du Canada</li>
                    <li>Caisses populaires Desjardins</li>
                    <li>Centre Jeunesse Mont&eacute;r&eacute;gie</li> 
                    <li>Coll&egrave;ge international Marie de France</li> 
                    <li>Coll&egrave;ge des M&eacute;decines douces du Qu&eacute;bec</li> 
                    <li>Conf&eacute;rence R&eacute;gionale des &Eacute;lus CR&Eacute; Mont&eacute;r&eacute;gie Est</li>
                    <li>Commission des normes, de l'&eacute;quit&eacute;, de la sant&eacute; et de la s&eacute;curit&eacute; au travail</li>
                    <li>Conseil national de recherches Canada</li> 
                    <li>Hôpital v&eacute;t&eacute;rinaire de l’Est</li>
                    <li>Hydro-Qu&eacute;bec</li> 
                    <li>Jean Coutu</li>
                    <li>Marconair</li>
                    <li>McCarthy-T&eacute;trault</li>
                    <li>Minist&egrave;re de la Culture et des Communications</li> 
                    <li>Olymel</li> 
                    <li>Pastene</li> 
                    <li>R&eacute;gence Voyages</li>
                    <li>Sûret&eacute; du Qu&eacute;bec</li>
                    <li>Union des Producteurs Agricoles UPA</li> 
                    <li>Ville de Montr&eacute;al</li>
                </ul>
               </p>

            </div>
      
            </div><!-- end of first row right part -->
            <h3 class='h333'><?php echo _("OrgNonGovEtNonLuc"); ?></h3>
      <div class='row'> 
      <div class='col-md-5 col-sm-5 col-xs-12 services'> 
            <p><center><img  src='photos/pages/mtlfall.jpg'  class='img-responsive'></center></p>
            <!-- <p><center><img  src='photos/pages/ong.jpg'  class='img-responsive'></center></p> -->
            
      </div>
       <div class='col-md-7 col-sm-7 col-xs-12 services'>
               <p>
                 <ul>
                        <li>Association canadienne des femmes en communication </li>
                        <li>Association des contrôleurs d’hôtels </li>
                        <li>Centre des femmes du Haut Richelieu</li>
                        <li>Chambre de commenrce francaise au Canada</li>
                        <li>Fondation J-A Bombardier</li>
                        <li>Institut des R&eacute;sentants du Qu&eacute;bec</li> 
                        <li>Neuvaction</li> 
                        <li>Ordre des technologues en radiologie du Qu&eacute;bec</li> 
                        <li>R&eacute;seau des &eacute;lues municipales de la Mont&eacute;r&eacute;gie Est</li>
                        <li>R&eacute;seau des Femmes d'Affaires du Qu&eacute;bec</li> 
                        <li>R&eacute;seau des Femmes d'Affaires des Laurentides</li>
                        <li>Saje</li>
                        <li>Table de Concertation des groupes de femmes du Bas-Saint-laurent</li>
                    </ul>
               </p>
      </div>
      
            </div><!-- end of second row right part -->

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
