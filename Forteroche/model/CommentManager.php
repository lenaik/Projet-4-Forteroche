<?php

require_once("model/Manager.php");

class CommentManager extends Manager {

  public function getComments($chapterId) {
    $db = $this->dbConnect();
    $comments = $db->prepare('SELECT `id`, `author`, `comment`, DATE_FORMAT(`created_at`, "%d/%m/%Y à %Hh%i") AS comment_date FROM comments WHERE id_chapter = ? ORDER BY created_at DESC');
    $comments->execute(array($chapterId));
    return $comments;
  }

  public function getSignaledComments($signaled) {
    $db = $this->dbConnect();
    $req = $db->prepare('SELECT `id`, `author`, `comment`, DATE_FORMAT(`created_at`, "%d/%m/%Y à %Hh%i") AS comment_date FROM comments WHERE signaled = ?');
    $req->execute(array($signaled));
    $comments = $req->fetchAll();

    return $comments;
  }

  public function deleteComment($commentId) {
    $db = $this->dbConnect();
    $delete = $db->prepare('DELETE FROM comments WHERE id = ?');
    $delete->execute(array($commentId));
    header('Location: moderation');
  }

  public function SignalComment($commentId) {
    $db = $this->dbConnect();
    $signal = $db->prepare('UPDATE comments SET signaled = 1  WHERE id = ? ');
    $signal->execute(array($commentId));
    header('Location: chapitres');
  }

  public function unSignalComment($commentId) {
    $db = $this->dbConnect();
    $unsignal = $db->prepare('UPDATE comments SET signaled = 0  WHERE id = ? ');
    $unsignal->execute(array($commentId));
    header('Location: moderation');
  }
  
  public function postComment($idChapter, $author, $comment) {
    $db = $this->dbConnect();
    $comments = $db->prepare('INSERT INTO comments(`id_chapter`, `author`, `comment`,`created_at`) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($idChapter, $author, $comment));
    return $affectedLines;
  }

}
