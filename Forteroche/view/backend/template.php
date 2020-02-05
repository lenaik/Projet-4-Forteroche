<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?= $title ?></title>
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
      <script src="https://kit.fontawesome.com/2d0ef6b963.js" crossorigin="anonymous"></script>
      <link href="http://localhost/bon/public/css/style.css" rel="stylesheet" /> 
  </head>
      
  <body>
    <header class="<?= $header ?>">
      <div class="<?= $headerTop ?>">
        <a href="http://localhost/bon/index.php">
          <div class="item-top logo">
            <h2 class="sub-title">J.F</h2>
          </div>
        </a>
        <div class="item-top">
          <h1 class="title">Billet simple pour l'Alaska</h1>
        </div>
        <div class="item-top">
        <?php 
          if (isset($_SESSION["connected"])) {
            echo '<a href="../../index.php"><button class="login">Déconnexion</button></a>';
          } else {
            echo '<a href="index.php?action=espace-connexion"><button class="login">Connexion</button></a>';
          }
        ?>
        </div>
      </div>
    </header>
    
    <section class="wrapper"> 
      <?= $content ?>
    </section>


  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"
  ></script>
  <script>

    $(function() {
    var i = 0;
    slideCount = 5;
    function timeout() {
      setTimeout(function() {
        // Move $("#quote" + i) off to the left
        $("#quote" + i).animate({
          right: "120%"
        }, 2000);
        // Change selected quote
        i++;
        if(i > (slideCount - 1)) {
          i = 0;
        }
        // Move $("#quote" + i) to right side then back to middle
        $("#quote" + i).css("right", "-60%");
        $("#quote" + i).animate({
          right: "20%"
        }, 1500);
        timeout();
      }, 3500);
    };
    timeout();
  });

  $('.resume').hide();
  $('.resume:lt(1)').show();

  $('.chapters').click(function(){
    var id = $(this).attr('id');
    var all_resume = $('.resume');
    for (i=0;i<=all_resume.length;i++){
      if (all_resume[i].classList.contains(id)){
        all_resume[i].style.display = 'flex';
      } else {
        all_resume[i].style.display = 'none';
      }
    } 
  });

</script>
</body>
</html>
