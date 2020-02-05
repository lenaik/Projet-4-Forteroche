<?php

require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');


function accueil() {
  require('view/frontend/indexView.php');
}

function displayChapters() {
  $postManager = new ChapterManager(); // Création d'un objet
  $req = $postManager->getChapters();
  $data = $postManager->getChapters();
  require('view/frontend/chaptersView.php');
}

function displayContact() {
  require('view/frontend/contactView.php');
}

function chapter() {
  $postManager = new ChapterManager();
  $commentManager = new CommentManager();
  $chapter = $postManager->getChapter($_GET['id']);
  if(!empty($chapter)) {
    $comments = $commentManager->getComments($_GET['id']);
    require('view/frontend/chapterView.php');
  } else {
    require('view/frontend/errorView.php');
  }
}

function addComment($idChapter, $author, $comment) {
  $commentManager = new CommentManager();
  $affectedLines = $commentManager->postComment($idChapter, $author, $comment);
  if ($affectedLines === false) {
    throw new Exception('Impossible d\'ajouter le commentaire !');
  }
  else {
    header('Location: index.php?action=chapitre&id=' . $idChapter);
  }
}

function createMessage($name, $content, $subject, $email) {
  $contactManager = new ContactManager();
  $affectedLines = $contactManager->addMessage($name, $content, $subject, $email);
  if ($affectedLines === false) {
    throw new Exception('Impossible d\'ajouter le message !');
  }
  else {
    header('Location: accueil');
  }
}
