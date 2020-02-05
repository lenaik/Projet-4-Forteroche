<?php

require_once('model/AdminManager.php');
require_once('model/ChapterManager.php');


function loggin($user, $password) {
  $adminManager = new AdminManager();
  $dataUser = $adminManager->loggin($user, $password);
  var_dump($dataUser);
  if ($dataUser === false) {
    throw new Exception('Connexion impossible !');
  }
  else {
    $_SESSION['utilisateur'] =  $dataUser['id'];
    header('Location: http://localhost/bon/view/backend/dashBoard.php');
  }
}

function displayDashboard() {
  require('view/backend/dashBoard.php');
}

function displayLogin() {
  require('view/backend/loginView.php');
}

function displayCreate() {
  require('view/backend/createView.php');
}

function createChapter( $title, $content) {
  $addManager = new ChapterManager();
  $chapter = $addManager->addChapter($title, $content);
}

function displayEdit() {
  $postManager = new ChapterManager(); // Création d'un objet
  $req = $postManager->getChapters();
  require('view/backend/editView.php');
}

function displayMessages() {
  $contactManager = new ContactManager();
  $messages = $contactManager->getMessages();
  require('view/backend/inboxView.php');
}

function displayEditChapter() {
  $editManager = new ChapterManager();
  $chapter = $editManager->getChapter($_GET['id']);
  require('view/backend/chapterViewEdit.php');
}

function displayContactMessage() {
  $contactManager = new ContactManager();
  $message = $contactManager->getMessage($_GET['id']);
  require('view/backend/messageView.php');
}

function editChapter($id, $title, $content) {
  $updateManager = new ChapterManager();
  $chapter = $updateManager->editChapter($id, $title, $content);
}

function displayDelete() {
  $postManager = new ChapterManager(); // Création d'un objet
  $req = $postManager->getChapters();
  require('view/backend/deleteView.php');
}

function deleteChapter($id) {
  $deleteManager = new ChapterManager();
  $chapter = $deleteManager->deleteChapter($id);
}

function deleteMessage($id) {
  $deleteManager = new ContactManager();
  $message = $deleteManager->deleteMessage($id);
}

function displayModerate() {
  $commentManager = new CommentManager();
  $comments = $commentManager->getSignaledComments(1);
  require('view/backend/moderateView.php');
}

function deleteComment($id) {
  $deleteManager = new CommentManager();
  $comment = $deleteManager->deleteComment($id);
}

function SignalComment($id) {
  $signalManager = new CommentManager();
  $comment =  $signalManager->SignalComment($id);
}

function unSignalComment($id) {
  $cancelManager = new CommentManager();
  $comment =  $cancelManager->unSignalComment($id);
}

