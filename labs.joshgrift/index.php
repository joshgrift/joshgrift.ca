<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Josh Grift Labs</title>
    <?php include $template_uri . "head.php"; ?>
    <meta name="description" content="Various labs designed and hosted by Josh Grift">
  </head>

  <body>
    <?php include $template_uri . "header.php"; ?>

    <section class="centered">
      <?php
        $projects = get_projects();
        for ($i = 0; $i < count($projects); $i++) {
          ?>
            <div class="project">
              <div class="icon">
                <a href="<?=$projects[$i]['source']?>"><i class="<?=$projects[$i]['action']?>"></i></a>
              </div>
              <a href="<?=$projects[$i]['url']?>">
                <h5><?=$projects[$i]['title']?></h5>
                <p><?=$projects[$i]['description']?></p>
                <div class="tags">
                  <?php
                    $techs = get_techs($projects[$i]['tech']);
                    for($t = 0; $t < count($techs); $t++){
                    ?>
                      <i class="<?=$techs[$t]['icon']?>"></i>
                    <?php
                    }
                  ?>
                </div>
              </a>
            </div>
          <?php
        }
      ?>
    </section>

    <section class="centered">
      <p>
        More projects on <a href="https://github.com/dotjersh"><i class="fab fa-github"></i></a>.
        Updates on <a href="https://twitter.com/dotjersh"><i class="fab fa-twitter"></i></a>.
      </p>
    </section>

    <?php include $template_uri . "footer.php"; ?>
  </body>
</html>
