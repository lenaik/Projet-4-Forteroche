<?php $title = " Jean Forteroche - Supprimer un chapitre" ?>
<?php $header = "header-backend" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="template-middle">
  <h1 class="title-page">Supprimer un chapitre</h1>
  <h2 class="subtitle-page">Veuillez sélectionner le chapitre a supprimer dans la liste.</h2>
  <a href="administration">
    <div class="goback">
      <i class="far fa-arrow-alt-circle-left"></i>
      <span class="goback-text">Retour</span>
    </div>
  </a>
  <ul>
    
      <li class="feature">
       
        <i onclick="Confirmed()" class="fas fa-trash delete-button"></i>
      </li>
    
  </ul>
</section>


<script>
  function Confirmed() {
    if(confirm("Etes vous sur de vouloir suppimer le chapitre ?"))
    {
      window.location.href = "index.php?action=suppression-chapitre&id=<?= $id ?>"
    } else {
      console.log("Suppression annulée")
    }
  }
</script>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
