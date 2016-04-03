<?php
require_once("../includes/php_utils.php");

// i18n:
$language = setLanguage();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CAROLE MEYER - <?php echo _("AproposDeNous"); ?> </title>
<meta name="Description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dancing Script">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/stylecmco.css">
<script type='text/javascript' src='js/jquery-1.9.1.min.js'></script>
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
            <li><a href="#">T&eacute;moignages</a></li>
            
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
          <li class ='active'><a href="apropos.php">&Agrave; propose de nous<span class="sr-only">(current)</span></a></li>
          <li><a href="contact.php">Contact<span class="sr-only">(current)</span></a></li>
          <li><?php print getUrlForOtherLang($language, "<span class='sr-only'>(current)</span>"); ?> </li>
        </ul>
          <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left" role="search">
        <!-- <div class="form-group">
          <input type="text" class="form-control" id="loupe">
        </div> -->
        <!-- <button type="submit" class="btn btn-default">Submit</button> -->
        </form>
      </ul>
    
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
  </nav> 
<div class='row touteslespages one-edge-shadow'>
        <?php require_once 'slogan.php'; ?>
  </div>
        
      <div class='col-md-4 col-sm-4 col-xs-12 '>
        <h3 class='h333'><?php echo _("Temoignages"); ?></h3>
        <div class='clientfeedback'>
         <p >&quot;J’ai remarqué que l’absence de jugement et le soutien que tu offres pendant la réalisation des exercices ont vraiment contribué à me donner le courage
          de prendre ma place et de donner mon point de vue devant une centaine de personnes exigeantes  !&quot;
              </p>
                <p class='client'>Sandrine</p>
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
        <h3 class='h333'><?php echo _("AproposDeNous"); ?></h3>
      <div class='row'> 
      <div class='col-md-5 col-sm-5 col-xs-12 services'> 
            <p><center><img  src='photos/carole-meyer1.jpg'  class='img-responsive'></center></p>
            <p><h1 id='caption'>Carole Meyer</h1></p>
      </div>
       <div class='col-md-7 col-sm-7 col-xs-12 services'>
         <p>Partenaire d’affaires des petites et moyennes entreprises canadiennes depuis 2001, Carole Meyer Communication organisationnelle est une compagnie agréée par Emploi-Québec qui offre aux leaders et cadres supérieurs des services conseils en leadership à forte valeur ajoutée.   La haute satisfaction
          des clients de Carole Meyer Communication organisationnelle est principalement due à trois aspects :
            <ul>
                    <li> qualité remarquable des services, </li>
                    <li> appropriation efficiente des nouvelles habitudes de leadership, </li> 
                    <li>transférabilité immédiate des savoirs faire.</li>
               </ul>
               <p>L’équipe de Carole Meyer Communication organisationnelle contribue avec enthousiasme 
               à aider les organisations à faire du capital humain un avantage concurrentiel.

               <p><h3 class='h222'>PARCOURS</h3>
              <p>Depuis quinze ans, Carole Meyer et son équipe travaillent avec les gens d’affaires principalement francophones et anglophones du Canada et obtiennent
               une amélioration considérable de la communication organisationnelle des compagnies.</p><p> Avant cela, Carole Meyer a eu la chance de participer à la mise en place de la monnaie unique européenne, en partenariat avec des organismes privés et publics.</p>
               <p> Détentrice de certificats et maîtrises en administration, communication organisationnelle,
                formation de formateurs, lettres et langues, elle a su mettre à profit ses connaissances pour innover et donner un visage humain à la réussite des organisations.</p>
                <p> Constamment appréciée pour son influence bénéfique, elle crée des liens de confiance solides avec les hommes et les femmes à la tête d’entreprises. Remarquée pour son engagement
             généreux et son leadership contagieux, elle apporte une contribution unique à ses clients.  
                </p>
                 <!-- <p><h3><span class="label label-info">VISION, MISSION, VALEURS NOTRE </span></h3> -->
                 <p><h3 class='h222'>NOTRE VISION</h3> 
                  Créatrice d’un modèle innovant de leadership fondé sur le potentiel à cultiver un dialogue émotionnellement intelligent afin d’épauler les leaders, susciter l’engagement, créer l’intelligence collective et augmenter les opportunités d’affaires.
                 </p>
                 
                 <p><h3 class='h222'>NOTRE MISSION</h3>
                 <p> Aider les dirigeants et cadres supérieurs à se distinguer, découvrir et développer leur potentiel à cultiver un dialogue émotionnellement intelligent pour réussir leurs objectifs d’affaires en transformant les résistances aux changements en prises d’engagement.</p> 
Mener des ateliers innovants, concrets et sur mesure qui présentent un juste équilibre entre explications des principes et mises en pratiques immédiatement transférables pour relever les défis d’affaires; se démarquer avec des ateliers offrant une plus-value concurrentielle;
 se passionner pour la recherche de nouveautés en matière de communication d’affaires. 
                 </p>
                 <p><h3 class='h222'>NOS VALEURS</h3>
                 <ul>
                    <li>Générosité</li>
                    <li>Finesse</li> 
                    <li>Performance</li>
                    <li>Leadership</li> 
                    <li>Engagement</li>
                    <li>Innovation</li> 
                  </ul>      
                 </p>
                 <div class='haut'><a href="#Top"><img  src='images/haut.png'></a></div>
       </div>
      
      </div><!-- end of first row right part -->

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
