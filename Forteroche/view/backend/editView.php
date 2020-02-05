<?php $title = " Jean Forteroche - Éditer un chapitre" ?>
<?php $header = "header-backend" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="template-middle">
  <h1 class="title-page">Éditer un chapitre</h1>
  <h2 class="subtitle-page">Veuillez sélectionner le chapitre a éditer dans la liste.</h2>
  <a href="administration">
    <div class="goback">
      <i class="far fa-arrow-alt-circle-left"></i>
      <span class="goback-text">Retour</span>
    </div>
  </a>
  <ul>
    
      <li class="feature">
        <a href="">
          
        </a>
      </li>
    
  </ul>
</section>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
