<?php
  include_once "includes/header.view.php"; // (HEADER ALL)
  include_once "includes/home.view.php"; // (HOME ALL)
	include_once "includes/about.view.php"; // (ABOUT ALL)
	include_once "includes/contact.view.php"; // (CONTACT)
?>

<!DOCTYPE html>

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Bingo</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="One page parallax responsive HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/css/lightbox.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  <!-- My Custom CSS -->
  <link rel="stylesheet" href="css/mystyle.css">

</head>
<!-- DIRECTION -->

<body id='body' style="<?php echo $autoBodyDirection ?>">
  <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!--
  End Preloader
  ==================================== -->

  

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light px-0">
      <!-- logo -->
      <a class="navbar-brand logo" href="index.php">
        <img loading="lazy" class="logo-default" src="images/logo.png" alt="logo" />
        <img loading="lazy" class="logo-white" src="images/logo-white.png" alt="logo" />
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav m-auto text-center">
          <li class="nav-item">
            <a class="nav-link" href="./index.php"><?php echo $header[0]["nav_home"] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about.php"><?php echo $header[0]["nav_about"] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contact.php"><?php echo $header[0]["nav_contact"] ?></a>
          </li>
        </ul>

        <!-- Language -->
        <?php if($lang == "1") { ?>
        <a class="navbar-brand ku mx-5 d-block text-center" href="switch-lang.php">
          <img loading="lazy" src="images/Kurdish.png" class="rounded" alt="Ku" />
        </a>
        <?php } else { ?>
        <a class="navbar-brand en mx-5 d-block text-center" href="switch-lang.php">
          <img loading="lazy" src="images/Us.png" class="rounded" alt="En" />
        </a>
        <?php } ?>
        <!-- /Language -->

      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->