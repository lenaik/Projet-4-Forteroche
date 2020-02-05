<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <title><?= $title ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
      <script src="https://kit.fontawesome.com/2d0ef6b963.js" crossorigin="anonymous"></script>
      <link href="http://localhost/bon/public/css/style.css" rel="stylesheet" /> 
  </head>
      
  <body>
    <header class="<?= $header ?>">
        
        <div class="item-top">
          <h1 class="title">Le blog de Jean Forteroche</h1>
        </div>
        <div class="item-top">
        
        </div>
      </div>
      <div class="header-bottom">
        <nav>
          <a class="item-bottom" href="http://localhost/Forteroche/index.php">Accueil</a>
          <a class="item-bottom" href="http://localhost/Forteroche/view/frontend/chaptersView.php">Tous les chapitres</a>
          <a class="item-bottom" href="http://localhost/Forteroche/view/frontend/contactView.php">Contact</a>
         <?php if (isset($_SESSION['connected'])) 
         { ?>                                       
              <a class="item-bottom" href="logout.php"> Se déconnecter </a>                               
          <?php } 
              else { ?>         
              <a class="item-bottom" href="http://localhost/Forteroche/view/backend/loginView.php"> Connexion</li>       
          <?php } ?>  

        </nav>
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

  let chapters = $('.chapters');
  for (i=0; i<chapters.length; i++) {
    if (i % 2 == 0 ) {
      chapters[i].style.backgroundColor = "#4a4c52"
    } else {
      chapters[i].style.backgroundColor = "#dbdfe7"
    }
  }

  $('.chapters').click(function(){
    var id = $(this).attr('id');
    var all_resume = $('.resume');
    for (i=0;i<all_resume.length;i++){
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
