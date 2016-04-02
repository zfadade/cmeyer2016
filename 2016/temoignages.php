<?php
require_once("../includes/php_utils.php");

// i18n:
$language = setLanguage();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CAROLE MEYER - <?php echo _("Temoignages"); ?></title>
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
            <li><a href="services.php">Clients</a></li>
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
          <li><a href="apropos.php">&Agrave; propos de nous<span class="sr-only">(current)</span></a></li>
          <li><a href="contact.php">Contact<span class="sr-only">(current)</span></a></li>
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
     
       <div class='col-md-12 col-sm-12 col-xs-12'>
      <div class='col-md-4 col-sm-4 col-xs-12'>
        <h3 class='h333'><?php echo _("Temoignages"); ?></h3>
        <div class='clientfeedbackT'>
         <p >&quot;Mon équipe, traditionnellement allergique à tout changement, réagit différemment aux
nouvelles contraintes imposées par nos fournisseurs, depuis que vous l’avez entraînée. Non
seulement, ils ne discutent plus pour se soustraire aux nouvelles procédures, mais en plus,
ils deviennent créatifs et trouvent des raccourcis! Votre façon de travailler est étonnante !
Vos résultats sont surprenants ! Un exemple à suivre !&quot;
              </p>
                <p class='client'>Ren&eacute;</p>
        </div>

      <!-- Display contact form -->
      <?php
        $formTitle = _("PourEtreContacte");
        $showCommentaire = false;
        $showInfolettreOuiNon = false;
        include('contactForm.php');
      ?>

    <!-- <div class='testimony'>&nbsp;</div> -->
     
      </div><!-- end of col left -->
      

      <div class='col-md-8 col-sm-8 col-xs-12'>
        <h3 class='h333'><?php echo _("Ce qu'ils pensent de nous"); ?></h3>
        <br>
      <div class='row'> 
      <div class='col-md-3 col-sm-3 col-xs-12 services'> 
            <p><center><img  src='images/OMGLOGO/remme_logo_2.jpg'  class='img-responsive'></center></p>

      </div>
       <div class='col-md-9 col-sm-9 col-xs-12 services'>
        
         <p>En tant que présidente du réseau des Élues municipales de la Montérégie est,
je recommande très allègrement les services de madame Meyer en tant que
formatrice en communication. Après avoir moi-même suivi sa formation,
plusieurs autres élues ont pu bénéficier de son expérience et nombreuses
sont venues me confirmer la qualité de sa formation. De plus, j’ai pu
expérimenter ses conseils, et j’ai été à même d’observer une amélioration
importante dans mes allocutions publiques.
        <p><b>Lucie Bisson</b>, Pr&eacute;sidente du R&eacute;seau des &Eacute;lues municipales de la Mont&eacute;r&eacute;gie
Est (R&Eacute;MME)</p>
        </div>

         </div><!-- end of first row right part --> 
      </div><!-- end of col md-8 right -->
          
<div class='col-md-8 col-sm-8 col-xs-12'>
        <hr>
        <br>
      <div class='row'> 
      <div class='col-md-3 col-sm-3 col-xs-12 services'> 
            <p><center><img  src='images/OMGLOGO/RFL.png'  class='img-responsive'></center></p>

      </div>
       <div class='col-md-9 col-sm-9 col-xs-12 services'>
        
         <p>Bonjour Carole,<br>
Ces journées de formation destinées à des élues municipales des Laurentides
étaient formidable! Vous avez su partager votre matière dans une ambiance
décontractée et pleine d’humour. Nous avons apprécié votre enthousiasme,
votre dynamisme et la passion que vous transmettez, de même que l’importance accordée à chacune des participantes. Pour reprendre le
commentaire d’une d’entre elles, «vous reflétez parfaitement ce que vous
inculquez.
<br>
Au plaisir de poursuivre la formation !
        <p><b>Vicky Langlais</b>, charg&eacute;e de projet, R&eacute;seau des Femmes des Laurentides
</p>
        </div>

         </div><!-- end of 2 row right part --> 
      </div><!-- end of col 2 md-8 right -->
      
<div class='col-md-8 col-sm-8 col-xs-12'>
        <hr>
        <br>
      <div class='row'> 
      <div class='col-md-3 col-sm-3 col-xs-12 services'> 
            <p><center><img  src='images/OMGLOGO/bombardier.jpg'  class='img-responsive'></center></p>

      </div>
       <div class='col-md-9 col-sm-9 col-xs-12 services'>
        
         <p>Carole,<br>
Tes accompagnements me sont très utiles. Ils me permettent de prendre
plus de plaisir à faire mes prestations en public, mes rencontres dans les
chambres de commerce et de passer mes messages avec plus de finesse.
J’apprécie beaucoup le temps que tu me consacres !
<br>
Au plaisir de poursuivre la formation !
        <p><b>Lyne Lavoie</b>, Directrice g&eacute;n&eacute;rale, Fondation J. Armand Bombardier
</p>

<div class='haut'><a href="#Top"><img  src='images/haut.png'></a></div>
        </div>

         </div><!-- end of 3 row right part --> 
      </div><!-- end of col 3 md-8 right -->
        
      <!-- NEE TO CHANGE GRID FROM HERE-->

<div class='col-md-12 col-sm-12 col-xs-12'>

        <hr>
        <br>
      <div class='row'> 
        <div class='col-md-4 col-sm-4 col-xs-12 services'> 
        </div>
      <div class='col-md-2 col-sm-2 col-xs-12 services'> 
            <p><center><img  src='images/OMGLOGO/france.gif'  class='img-responsive'></center></p>

      </div>
       <div class='col-md-6 col-sm-6 col-xs-12 services'>
        
         <p>Ch&egrave;re Carole,<br>

Les relations publiques sont mon domaine de prédilection. Pourtant, animer
le grand bal annuel de mon organisation représentait pour moi un nouveau
défi. Grâce à ta formation, Carole, j’anime ce grand événement depuis
plusieurs années maintenant; j’ose même le dire avec plaisir. Tous les ans,
les invités ne tarissent pas d’éloges!
Je suis très heureuse de vivre cette expérience, mille fois merci!

<br>
Au plaisir de poursuivre la formation !
        <p><b>V&eacute;ronique Loiseau</b>, Directrice G&eacute;n&eacute;rale, Chambre de commerce française du Canada
</p>
        </div>

         </div><!-- end of 4 row right part --> 
      </div><!-- end of col 4 md-8 right -->
      

    <div class='col-md-12 col-sm-12 col-xs-12'>
        <hr>
        <br>
      <div class='row'> 
        <div class='col-md-4 col-sm-4 col-xs-12 services'>
        </div>
      <div class='col-md-2 col-sm-2 col-xs-12 services'> 
            <p><center><img  src='images/OMGLOGO/hydro.png'  class='img-responsive'></center></p>

      </div>
       <div class='col-md-6 col-sm-6 col-xs-12 services'>
        
         <p>Bonjour Carole,<br>

Tes interventions auprès d’un grand nombre de départements et services sont des francs succès. Les participants sont enchantés de ta prestation, de ta capacité à travailler avec tous, à mettre les gens dans l’action et à donner une rétroaction personnalisée à chacun.  


<br>
Merci et bravo !
        <p><b>B&eacute;n&eacute;dicte Monroe</b>, Formation à la communication, Hydro-Québec 
</p>
        </div>

         </div><!-- end of 5 row right part --> 
      </div><!-- end of col 5 md-8 right -->
      

 <div class='col-md-12 col-sm-12 col-xs-12'>
        <hr>
        <br>
      <div class='row'> 
        <div class='col-md-4 col-sm-4 col-xs-12 services'> 
        </div>
      <div class='col-md-2 col-sm-2 col-xs-12 services'> 
            <p><center><img  src='images/OMGLOGO/cwc.png'  class='img-responsive'></center></p>

      </div>
       <div class='col-md-6 col-sm-6 col-xs-12 services'>
        
         <p>Madame Meyer,<br>

<p>L’Association canadienne des femmes en communications tient à vous remercier chaleureusement de votre participation à titre de conférencière lors de notre dernier déjeuner causerie intitulé La puissance du leadership et l’art de parler en public.</p>
Nous sommes touchées par votre générosité à partager vos connaissances pour aider les femmes à faciliter leurs communications professionnelles quotidiennes.</p> 
<p>Votre présentation, empreinte de sincérité, la pertinence de vos propos, votre enthousiasme et votre humour ont été, nous en sommes convaincues, une source d’inspiration pour toutes celles qui assistaient à l’événement. 
<p>Le comité organisateur vous prie de recevoir, Madame Meyer, l’expression de ses meilleures salutations.</p>

        <p><b>Am&eacute;lie Poulin</b>,Présidente, L’Association canadienne des femmes en communications – Québec  
</p>
        </div>

         </div><!-- end of 6 row right part --> 
      </div><!-- end of col 6 md-8 right -->

<div class='col-md-12 col-sm-12 col-xs-12'>
        <hr>
        <br>
      <div class='row'> 
        <div class='col-md-4 col-sm-4 col-xs-12 services'>
        </div>
      <div class='col-md-2 col-sm-2 col-xs-12 services'> 
            <p><center><img  src='images/OMGLOGO/acsq.jpg'  class='img-responsive'></center></p>

      </div>
       <div class='col-md-6 col-sm-6 col-xs-12 services'>
        
         <p>Madame Meyer,<br>

À la suite de la formation que vous avez offerte à l’ensemble du personnel du bureau de l’ACSQ à la Sûreté du Québec, je voulais vous faire part de ma grande satisfaction à l’égard de votre programme et de l’approche de formation qui a été préconisée. 
Je suis d’avis que les objectifs qui avaient été préalablement identifiés à la formation ont été atteints avec succès et je me fais le porte-parole de l’ensemble du personnel ayant participé à cette formation pour vous transmettre leur appréciation personnelle. 
La qualité et l’adaptabilité de votre approche aux différents types d’auditoires auxquels vous êtes confrontée quant à leurs besoins et attentes particuliers font certainement l’un des succès de votre approche en communication. 
 Inspecteur-chef, Responsable du bureau de l’amélioration continue des services de qualité  Sûreté du Québec 
 

        <p><b>Benoit Poulin</b>,Inspecteur-chef, Responsable du bureau de l’amélioration continue des services de qualité Sûreté du Québec  
</p>
        </div>

         </div><!-- end of 7 row right part --> 
      </div><!-- end of col 7 md-8 right -->

<div class='col-md-12 col-sm-12 col-xs-12'>
        <hr>
        <br>
      <div class='row'> 
        <div class='col-md-4 col-sm-4 col-xs-12 services'>
        </div>
      <div class='col-md-2 col-sm-2 col-xs-12 services'> 
            <p><center><img  src='images/OMGLOGO/quebec.gif'  class='img-responsive'></center></p>

      </div>
       <div class='col-md-6 col-sm-6 col-xs-12 services'>
        
         <p>Ch&egrave;re Carole,<br>

L’atelier que j’ai animé a été SUPER, vraiment EXTRAORDINAIRE ! Je veux te témoigner mon appréciation pour m’avoir préparée et renforcie juste avant. Tout s’est merveilleusement bien passé. On dirait que tes outils ont structuré toute la salle (plus de 100 personnes). Je n’en revenais pas de voir comment tout ceci était fluide. Je crois qu’on est arrivé à plus de sentiment d’équipe, plus de sentiment d’être écouté, plus de respect de part et d’autre. 
<br>Pour tout ceci, vivement merci ! 
 
 

        <p><b>Jacinthe Tremblay</b>, Conseillère cadre à la direction, centres de jeunesse Montérégie   
</p>
<div class='haut'><a href="#Top"><img  src='images/haut.png'></a></div>
        </div>

         </div><!-- end of 8 row right part --> 
      </div><!-- end of col 8 md-8 right -->



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
