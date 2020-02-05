<?php $title = " Un billet Pour l'Alaska - Une erreur s'est produite" ?>
<?php $header = "header" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="template-short">
  <h1 class="title-page">Page d'erreur</h1>
  <p>Une erreur s'est produite. Merci de retourner à l'accueil.</p>
</section>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
