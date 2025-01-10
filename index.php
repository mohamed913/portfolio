<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Abo-Hozifa</title>
  <!-- adding icon to the site  -->
  <link rel="icon" href="assets/imgs/portfolio.png" type="image/png">
  <link rel="icon" href="assets/imgs/portfolio.png" type="image/x-icon">

  <link rel="stylesheet" href="assets/normalize/normalize.css" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC+Guides&display=swap" rel="stylesheet">

</head>

<body>
  <class="container">
    <?php
    include 'views/modal.html';
    ?>
    </div>
    <!-- start nav bar -->
    <?php
    include 'views/navbar.html';
    ?>


    <!-- end nav bar -->
    <!-- start carasaul -->
    <div>
      <?php
      include 'views/carasaul.html';
      ?>

    </div>
    <!-- end carasaul -->

    <!-- start about -->
    <h1 id="about" class="myheading">About</h1>
    <div class="container">
      <?php
      include 'views/about.html';
      ?>

    </div>
    <!-- end about -->
    <!-- start services -->

    <h1 id="services" class="myheading">Services</h1>
    <div class="container">
      <?php
      include 'views/services.html';
      ?>

    </div>
    <!-- end services -->

    <!-- start skills -->
    <h1 id="skills" class="myheading">Skills</h1>
    <div class="container">

      <?php
      include 'views/skills.html';
      ?>

    </div>
    <!-- end skills -->

    <!-- start projects -->

    <h1 id="projects" class="myheading">Projects</h1>
    <div class="container">
      <?php
      include 'views/projects.html';
      ?>

    </div>
    <!-- end projects -->
    <!-- start footer -->
    <?php
    include 'views/footer.html';
    ?>

    <!-- end footer -->



    <script src="assets/js/script.js"></script>
</body>

</html>