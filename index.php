<?php require('cockpit/bootstrap.php');
require_once('route.php');
// $base_url = 'http://' . $_SERVER['HTTP_HOST'];
// $current_url = $base_url. $_SERVER['REQUEST_URI'];
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3S Motors</title>

  <!-- BOOTSTRAP 3 -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- FONTAWESOME -->
  <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script> -->

  <!-- BOUTON > MODAL OPTION MORPHING -->
  <link rel="stylesheet" href="dist/assets/js/morphing/css/reset.css"> <!-- CSS reset -->

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="dist/assets/css/style.min.css">
  <!-- Favicon -->
  <link rel="icon" href="./dist/assets/img/favicon.ico">


</head>
<body id="top">
  <!-- Loader -->

  <?php if(!isset($_SESSION['loader'])){ echo
    '<div class="loader">
    <div id="myProgress">
    <div id="myBar">
    <img src="./dist/assets/img/logonoir_3smotors.png" alt="">
    </div>
    <input type="text" id="percentage" value="0%">
    </div>
    </div>';}
    $_SESSION["loader"] = true;

  // Header
    include ('pages/header.php'); ?>

    <div id="content">

      <?= $content; ?>

    </div>


    <!-- footer -->
    <?php include ('pages/footer.php'); ?>

    <!-- Button run to top / smoothscroll -->
    <a href="#top" class="run-to-top"><img src="" alt=""></a>

    <!-- SCRIPTS -->

    <!-- jQuery -->

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- Bootstrap 3 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Scrollify pour effet de changement de page au scroll -->
    <script type="text/javascript" src="dist/assets/js/scrollify/jquery.scrollify.min.js"></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="dist/assets/js/script.js"></script>

  </body>
  </html>
