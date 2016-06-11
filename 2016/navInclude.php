<?php
require_once("../includes/php_utils.php");

// Welcome
$indexAnchorTag = getAnchorElemForPage("index.php", $lang, _("Bienvenue"));

// Services

$servicesAnchorTag = getAnchorElemForPage("services.php", $lang, _("Services"));
$ateliersAnchorTag = getAnchorElemForPage("ateliers.php", $lang, _("Atelier"));
$consultationsAnchorTag = getAnchorElemForPage("consultations.php", $lang, _("Consultations"));

// Clients
$clientsAnchorTag = getAnchorElemForPage("clients.php", $lang, _("Clients"));
$listClientsAnchorTag = getAnchorElemForPage("listclients.php", $lang, _("ListeDesOrganisations"));
$temoignagesAnchorTag = getAnchorElemForPage("temoignages.php", $lang, _("Temoignages"));

# Media
$mediaAnchorTag = getAnchorElemForPage("media.php", $lang, _("Media"));
$videoAnchorTag = getAnchorElemForPage("video.php", $lang, _("Videos"));
$infolettreAnchorTag = getAnchorElemForPage("infolettre.php", $lang, _("Infolettres"));
$liensAnchorTag = getAnchorElemForPage("lien.php", $lang, _("LiensUtiles"));

# A propos de nous
$aproposAnchorTag = getAnchorElemForPage("apropos.php", $lang, _("AproposDeNous"));

// Contact
$contactAnchorTag = getAnchorElemForPage("contact.php", $lang, _("Contact"));

// Francais/English
$englishFrancaisAnchorTag = getUrlForOtherLang($language, "<span class='sr-only'>(current)</span>");

echo <<< END

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
    <li>$indexAnchorTag</li>
    <li class="dropdown active">
      <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Services <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li>$servicesAnchorTag</li>
        <li role="separator" class="divider"></li> 
        <li>$ateliersAnchorTag</li> 
        <li role="separator" class="divider"></li>
        <li>$consultationsAnchorTag</li>
      </ul>
    </li>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clients <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li>$clientsAnchorTag</li>
        <li role="separator" class="divider"></li>
        <li>$listClientsAnchorTag</a></li>
        <li role="separator" class="divider"></li>
        <li>$temoignagesAnchorTag</a></li>
        
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo _("Media"); ?><span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li>$mediaAnchorTag</li> 
        <li role="separator" class="divider"></li>
        <li>$videoAnchorTag</li> 
        <li role="separator" class="divider"></li>
        <li>$infolettreAnchorTag</li>
        <li role="separator" class="divider"></li>
        <li>$liensAnchorTag</li>
      </ul>
    </li>
      <li><a href="apropos.php"><?php echo _("AproposDeNous"); ?><span class="sr-only">(current)</span></a></li>
      <li><a href="contact.php">Contact<span class="sr-only">(current)</span></a></li>
      <li>$englishFrancaisAnchorTag</li>
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
END;
