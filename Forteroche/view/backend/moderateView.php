<?php $title = " Jean Forteroche - Modération commentaire" ?>
<?php $header = "header-backend" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="template-middle">
  <h1 class="title-page">Votre espace modération</h1>
  <h2 class="subtitle-page">
    Retrouvez les commentaires qui ont été signalés par vos lecteurs.
    Vous pouvez les supprimer ou les ré-habilliter grâces aux boutons mis à disposition.
  </h2>
  <a href="administration">
    <div class="goback">
      <i class="far fa-arrow-alt-circle-left"></i>
      <span class="goback-text">Retour</span>
    </div>
  </a>

  <?php 
    if (!empty($comments)) {
  ?>
    <ul>  
      <?php
       for ($i=0; $i < count($comments); $i++)
       {
      ?>
        <li class="feature-column">
          <p><strong><?= htmlspecialchars($comments[$i]['author']) ?></strong> le <?= $comments[$i]['comment_date'] ?></p>
          <p><?= nl2br(htmlspecialchars($comments[$i]['comment'])) ?></p>
          <div class="two-choose">
            <button onclick="Delete(<?= $comments[$i]['id'] ?>)">Supprimer</button>
            <button onclick="Cancel(<?= $comments[$i]['id']?>)">Ré-intégrer</button>
          </div>
        </li>
      <?php
        }
      ?>
    </ul>
  <?php
    } else {
  ?>
    <h3 class="subtitle-page">
      Il n'y a actuellement pas de commentaire à modérer.
    </h3>
  <?php
    }
  ?>
</section>


<script>
  function Delete(id) {
    if (confirm("Etes vous sur de vouloir suppimer ce commentaire ?"))
    {
      window.location.href = "index.php?action=supprimer-commentaire&id="+id
    } else {
      console.log("Suppression annulée")
    }
  }

  function Cancel(id) {
    if(confirm("Etes vous sur de vouloir ré-intégrer ce commentaire ?"))
    {
      window.location.href = "index.php?action=annuler-moderation&id="+id
    } else {
      console.log("Suppression annulée")
    }
  }
</script>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
