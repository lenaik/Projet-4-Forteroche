<?php $title = " Jean Forteroche - Espace de connexion" ?>
<?php $header = "header-backend" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="login-page">
   <h1 class="title-page">Espace d'administration</h1>
   <h2 class="subtitle-page">Veuillez vous connecter pour accéder à votre espace d'administration.</h2>

  <form class="login-form" action="http://localhost/Forteroche/view/backend/dashBoard.php" method="post">
    <div class="login-form-top">
      <div class="form-field">
          <input type="text" id="user" class="input-text" name="user" placeholder="Nom d'utilisateur" required/>
      </div>
      <div class="form-field">
          <input type="password" id="password" name="password" class="input-text" placeholder="Mot de passe" required />
      </div>
    </div>
    <div class="form-field">
      <input class="submit-btn" type="submit" value="Envoyer">
    </div>
  </form>
</section>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

