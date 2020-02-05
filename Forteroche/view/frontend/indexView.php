<?php $title = " Un billet Pour l'Alaska - Le roman de Jean Forteroche" ?>
<?php $header = "header" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="template-big">

    <div class="content-general">
      <div class="content-home-left">
        <h2 class="subtitle-page">Le caribou aux grandes oreilles</h2>
        <p> Aliquam euismod orci non dolor hendrerit, sed tincidunt mi tincidunt. René ne va être pas content, c'était pas de grandes oreilles qu'il rêvait mon René. Lui qui avait tout prévu, il a même été à la pharmacie pour acheter de la créme, quelle déception pour mon René. Aliquam vulputate suscipit purus vitae pulvinar. Phasellus et nibh eu risus porttitor sodales. Integer accumsan ornare hendrerit. Maecenas sed sagittis ex. Maecenas maximus auctor massa, quis dignissim metus faucibus non. Suspendisse at dignissim turpis. Sed sed viverra metus, eu efficitur felis. Quisque id libero sed mi maximus pretium eu nec urna. Mauris in velit ac ex pharetra sagittis luctus 
        </p>
      </div>
      <div class="content-home-right">
        <div class="jean"></div>
        <div class="jean-abstract">
          Jean Forteroche est né le 4 mai 1964 à Ortona (province de Chieti, dans les Abruzzes), est un écrivain. Il naît dans un petit village italien, Ortona, marqué par une enfance catholique, devenant même enfant de chœur, sa mère l'imagine avec une carrière de curé.À seize ans, il s'engage dans la Marine italienne. Il la quitte en 1982. Deux ans plus tard, en 1984, il rencontre Gabriel Pontello, célèbre écrivain et qu'il lui donne le goût de l'ecriture.
        </div>
      </div>
    </div>
  </div>
  
  
</section>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
