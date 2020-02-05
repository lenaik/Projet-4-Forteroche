<?php $_SESSION["connected"] = true; ?>
<?php $title = " Jean Forteroche - Connexion espace d'administration" ?>
<?php $header = "header-backend" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="template-middle">
  <h1 class="title-page">Espace d'administration</h1>
  <h2 class="subtitle-page">Retrouvez toutes les fonctionnalités afin de gérer votre site.</h2>

  <ul>  
    <li class="feature"><a href="../../index.php">Voir le site</a></li>
    <li class="feature"><a href="../../index.php?action=messagerie">Voir mes messages</a></li>
    <li class="feature"><a href="../../index.php?action=nouveau-chapitre">Poster un nouveau chapitre</a></li>
    <li class="feature"><a href="../../index.php?action=liste-edition">Éditer un chapitre</a></li>
    <li class="feature"><a href="../../index.php?action=supprimer-chapitre">Supprimer un chapitre</a></li>
    <li class="feature"><a href="../../index.php?action=moderation">Modération</a></li>
  </ul>
</section>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
