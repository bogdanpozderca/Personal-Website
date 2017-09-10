<?php
  require 'lib/site.inc.php';
  $projects = (new Bogdan\Projects($site))->all();
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Bogdan Pozderca">
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="icon" href="img/favicon.ico" type="image/x-icon"> -->
    <title>Bogdan Pozderca</title>

    <link rel="stylesheet" type="text/css" href="assets/stylesheets/app.css">
  </head>
  <body>
    <nav>
      <ul>
        <li class="bogdan"><img class="icon" src="assets/images/bogdan.png" alt="Bogdan Pozderca">
          <span>Bogdan</span>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/bogdanpozderca">LinkedIn</a>
        </li>
        <li>
          <a href="https://twitter.com/bogdanpozderca">Twitter</a>
        </li>
        <li>
          <a href="https://github.com/bogdanpozderca">Github</a>
        </li>
      </ul>
    </nav>

    <section id="intro">
      <h1>Bogdan Pozderca</h1>
      <div id="quick-links">
        <a href="#">Resume</a>
        <a href="#">Contact Me</a>
      </div>
    </section>

    <section class="grid center">
      <h1 class="header">
        <span class="title">Personal Projects</span>
      </h1>

      <div class="container">

        <?php foreach ($projects as $project) { ?>
        <div class="element project" data-color="<?php echo $project->getColor() ?>">
          <div class="project-name" data-color="<?php echo $project->getColor() ?>" >
            <?php echo $project->getTitle() ?>
          </div>
          <p class="project-description">
            <?php echo $project->getDescription() ?>
          </p>
          <!-- <div>links</div> -->
        </div>
        <?php } ?>

      </div>
    </section>

    <section class="footer">
      <p class="question">
        <span class="text">Hey, did you notice there's no JS on here</span>
        <span class="mark">?</span>
      </p>
    </section>
    <!-- <div id="copyright">© Copyright 2015 Bogdan Pozderca</div> -->
    <script src="assets/javascripts/index.js" type="text/javascript"></script>
  </body>
</html>