<?php $title = " Jean Forteroche - Rédiger un nouveau chapitre" ?>
<?php $header = "header-backend" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="template-middle">
  <h1 class="title-page">Rédiger un nouveau chapitre</h1>
  <h2 class="subtitle-page">Veuillez utiliser l'éditeur mis à votre disposition.</h2>
  <a href="administration">
    <div class="goback">
      <i class="far fa-arrow-alt-circle-left"></i>
      <span class="goback-text">Retour</span>
    </div>
  </a>
  <form class="backend-form" action="index.php?action=ajout-chapitre" method="post">
    <div class="form-field-title">
      <input name="title" class="input-text" placeholder="Veuillez écrire votre titre ici "value=""/>
    </div>
    <div class="form-field">
      <textarea class="tiny-area" placeholder="Veuillez écrire votre contenu" name="content"></textarea>
    </div>
    <div class="form-field">
      <input class="submit-btn"  onclick="Confirmed()" type="submit" value="Envoyer">
    </div>
  </form>
</section>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.tiny.cloud/1/3y0o4z3btq0eswxcaiemnc9mp1rnzmew17ps4dg475gvkdzf/tinymce/5/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: 'textarea',
    height: 500,
    width: '100%',
    menubar: false,
    plugins: [
      'advlist autolink link lists image charmap print preview anchor textcolor ',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table contextmenu paste code help'
    ],
    toolbar: ' insert | undo redo | styleselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help '
  });
</script>
<script>
  function Confirmed() {
    confirm("Etes vous sur de vouloir ajouter ce chapitre ?")
  }
</script>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
