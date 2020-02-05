<?php

require_once("Manager.php");

class AdminManager extends Manager {

  public function loggin($user, $password) {
    $db = $this->dbConnect();

    $dataUser = $db->prepare('SELECT id, password FROM loggin WHERE user = :user' );
    $dataUser->execute(['user' => $_POST['user']]);
    $user = $dataUser->fetch();



      if ($dataUser != false) {
        if ($password == $user['password']) {
          return $user;
        } else {
           echo 'Mot de passe incorrect. Veuillez vous connecter à nouveau.';
        }
      }
      else {
    echo 'echec connexion.';
    }
   
  }

}
