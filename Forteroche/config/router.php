<?php

class Router { 

  public function init() {
    try {  
      if (isset($_GET['action'])) {
          if ($_GET['action'] == 'accueil') {
          accueil();
          }

          elseif ($_GET['action'] == 'chapitres') {
              displayChapters();
          }

          elseif ($_GET['action'] == 'contact') {
              displayContact();
          }

          elseif ($_GET['action'] == 'chapitre') {
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                  chapter();
              }
              else {
                  throw new Exception('Aucun identifiant de billet envoyé');
              }
          }

          elseif ($_GET['action'] == 'ajout-commentaire') {
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                  if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                      addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                  }
                  else {
                      throw new Exception('Tous les champs ne sont pas remplis !');
                  }
              }
              else {
                  throw new Exception('Aucun identifiant de billet envoyé');
              }
          }

          elseif (($_GET['action'] == 'connexion')) {
              if (isset($_POST['user']) && isset($_POST['password'])) {
                  if (!empty($_POST['user']) && !empty($_POST['password'])) {
                      loggin($_POST['user'], $_POST['password']);
                      
                  }
                  else {
                      throw new Exception('Tous les champs ne sont pas remplis !');
                  }
              }
              else {
                  throw new Exception('Aucun identifiant de billet envoyé');
              }
          }

          elseif (($_GET['action'] == 'administration')) {
              if (isset($_SESSION['utilisateur'])) {
                  displayDashboard();
              } else {
                  echo "Mot de passe incorrect";
              }
          }

          elseif (($_GET['action'] == 'deconnexion')) {
              if (isset($_SESSION['connected'])) {
                  session_destroy();
                  header('Location:http://localhost/bon/index.php');
              }
          }

          elseif (($_GET['action'] == 'espace-connexion')) {
              displayLogin();
          }

          elseif (($_GET['action'] == 'nouveau-chapitre')) {
              displayCreate();
          }

          elseif (($_GET['action'] == 'ajout-chapitre')) {
              if (!empty($_POST['title']) && !empty($_POST['content'])) {
              createChapter($_POST['title'], $_POST['content']);
              } else {
                  throw new Exception('Aucun titre et/ou contenu');
              }
          }


          elseif (($_GET['action'] == 'supprimer-chapitre')) {
              displayDelete();
          }

          elseif ($_GET['action'] == 'suppression-chapitre') {
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                  deleteChapter($_GET['id']);
              }
              else {
                  throw new Exception('Aucun identifiant de billet envoyé');
              }
          }

          elseif (($_GET['action'] == 'liste-edition')) {
              displayEdit();
          }

          elseif ($_GET['action'] == 'editer-chapitre') {
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                  displayEditChapter();
              }
              else {
                  throw new Exception('Aucun identifiant de billet envoyé');
              }
          }

        
          elseif (($_GET['action'] == 'actualiser-chapitre')) {
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                  if (!empty($_POST['titleUpdate']) && !empty($_POST['contentUpdate'])) {
                      editChapter($_GET['id'], $_POST['titleUpdate'], $_POST['contentUpdate']);
                  }
                  else {
                      throw new Exception('Tous les champs ne sont pas remplis !');
                  }
              }
              else {
                  throw new Exception('Aucun identifiant de billet envoyé');
              }
          }  

          elseif (($_GET['action'] == 'moderation')) {
              displayModerate();
          }

          elseif (($_GET['action'] == 'messagerie')) {
              displayMessages();
          }

          elseif ($_GET['action'] == 'supprimer-commentaire') {
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                  deleteComment($_GET['id']);
              }
              else {
                  throw new Exception('Aucun identifiant de billet envoyé');
              }
          }

          elseif ($_GET['action'] == 'annuler-moderation') {
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                  unSignalComment($_GET['id']);
              }
              else {
                  throw new Exception('Aucun commentaire de billet envoyé');
              }
          }
          
          elseif ($_GET['action'] == 'signaler-commentaire') {
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                  SignalComment($_GET['id']);
              }
              else {
                  throw new Exception('Aucun commentaire de billet envoyé');
              }
          }
      }
      else {
          accueil();
      }
    }
    catch(Exception $e) { // S'il y a eu une erreur, alors...
      $errorMessage = $e->getMessage();
      require('view/frontend/errorView.php');
    }
  }
}
