<?php $title = " Un billet Pour l'Alaska - Le roman de Jean Forteroche" ?>
<?php $header = "header" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="container-big">
  <h1 class='title-page'>Retrouvez tous les chapitres</h1>
  <h2 class="subtitle-page">Un billet Pour l'Alaska</h2>
    
  <div class="wrapper-chapters">
    <div class="content-chapters-left">
      <ul class="list-chapter">
        <?php
          while ($donnees = $req->fetch())
          {
            $id = $donnees['id'];
        ?>
          <li class="chapters" id="chapter<?= $id ?>"><?= $donnees['title']; ?></li>
        <?php
          }
        ?>
      </ul>
    </div>

    <div class="content-chapters-right">
      <ul class="list-chapter">
        <?php
          while ($donnees = $data->fetch())
          {
            $id = $donnees['id'];
        ?>
          <li class="resume chapter<?= $id ?> chapter">
            <span class="text-resume">
              <?= substr($donnees['content'], 0, 300);?>
            </span>
            <div>
              <a href='chapitre/<?= $id ?>'><button class="login">Lire la suite</button></a>
            </div>
          </li>
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
</section>


<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>


