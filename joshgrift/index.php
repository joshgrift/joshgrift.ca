<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Josh Grift</title>
    <?php include $template_uri . "head.php"; ?>
  </head>

  <body>
    <?php include $template_uri . "header.php"; ?>

    <style>
      .icon-server .primary {
        fill: var(--green);
      }

      .icon-server .secondary {
        fill: var(--grey-light-3);
      }

      .icon-application .primary {
        fill: var(--blue);
      }

      .icon-application .secondary {
        fill: var(--grey-light-3);
      }
    </style>

    <section class="hero">
      <!-- window -->
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 mr-4 icon-application"><path class="primary" d="M4 3h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 6v10h16V9H4z"/><path class="secondary" d="M5 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm3 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm3 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
        Junior <span style="color: var(--blue)">Frontend Developer</span>
      </p>
      <!-- server -->
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 mr-4 icon-server"><path class="primary" d="M5 3h14a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 10h14a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4c0-1.1.9-2 2-2zm2 3a1 1 0 0 0 0 2h3a1 1 0 0 0 0-2H7z"/><rect width="5" height="2" x="6" y="6" class="secondary" rx="1"/></svg>
        Aspiring <span style="color: var(--green)">Full Stack Developer</span>
      </p>
      <!-- university -->
      <p>
        <svg aria-hidden="true" data-prefix="fas" data-icon="university" class="svg-inline--fa fa-university fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="var(--purple)" d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z"></path></svg>
        Eager <span style="color: var(--purple)">University Student</span>
      </p>
      <!-- igloo -->
      <p>
        <svg aria-hidden="true" data-prefix="fas" data-icon="igloo" class="svg-inline--fa fa-igloo fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="var(--grey-dark-2)" d="M320 33.9c-10.5-1.2-21.2-1.9-32-1.9-99.8 0-187.8 50.8-239.4 128H320V33.9zM96 192H30.3C11.1 230.6 0 274 0 320h96V192zM352 39.4V160h175.4C487.2 99.9 424.8 55.9 352 39.4zM480 320h96c0-46-11.1-89.4-30.3-128H480v128zm-64 64v96h128c17.7 0 32-14.3 32-32v-96H411.5c2.6 10.3 4.5 20.9 4.5 32zm32-192H128v128h49.8c22.2-38.1 63-64 110.2-64s88 25.9 110.2 64H448V192zM0 448c0 17.7 14.3 32 32 32h128v-96c0-11.1 1.9-21.7 4.5-32H0v96zm288-160c-53 0-96 43-96 96v96h192v-96c0-53-43-96-96-96z"></path></svg>
        Based in <span style="color: var(--grey-dark-2)">Waterloo, Canada</span>
      </p>
    </section>

    <!-- social media -->
    <section class="centered spaced">
      <p>
        <a class="social" href="https://ca.linkedin.com/in/josh-grift-813616162" style="background-color:#0077B5;"><i class="fab fa-linkedin-in"></i></a>
        <a class="social" href="https://github.com/dotjersh" style="background-color:#24292e;"><i class="fab fa-github"></i></a>
        <a class="social" href="https://stackoverflow.com/users/4314753/jersh" style="background-color:#F48024;"><i class="fab fa-stack-overflow"></i></a>
        <a class="social" href="https://codepen.io/dotjersh/" style="background-color:#000000;"><i class="fab fa-codepen"></i></a>
        <a class="social" href="https://twitter.com/dotjersh" style="background-color:#00ACED;"><i class="fab fa-twitter"></i></a>
      </p>
    </section>

    <section class="colored" style="background-color:var(--green)">
      <h2 style="text-align: center;">
        <a href="https://labs.joshgrift.ca">
          Experiments <i class="fas fa-chevron-right"></i>
        </a>
      </h2>
    </section>

    <!--<section class="split">
      <div class="left" style="background-color:var(--green)">
        <h2>Experiments <i class="fas fa-chevron-right"></i></h2>
      </div>

      <div class="right" style="background-color:var(--purple)">
        <h2>Contact Me <i class="fas fa-chevron-right"></i></h2>
      </div>
      <div class="clear"></div>
    </section>

    <section class="colored">
      <div>
        <h2>Folks I've worked with</h2>

        <p>

        //  $clients = get_clients();
//          for ($i = 0; $i < count($clients); $i++) {

              <a href="//$clients[$i]['url']?>"><img class="//$clients[$i]['size']?>" src="//$clients[$i]['image']?>"></a>

          //}

        </p>
      </div>
    </section>-->

    <?php include $template_uri . "footer.php"; ?>
  </body>
</html>
