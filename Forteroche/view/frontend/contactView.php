<?php $title = " Un billet Pour l'Alaska - Formulaire de contact" ?>
<?php $header = "header" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="template-short">
   <div class="footer_title">
          
                
                  <h1>Me contacter</h1>
               
                 <p>Par Mail : </p> <a href="mailto:contact@Forteroche.fr">mailto:contact@Forteroche.fr</a>
              
          
</section>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
