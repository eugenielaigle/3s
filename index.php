<?php require('cockpit/bootstrap.php'); ?>
<?php require_once('route.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>3S Motors</title>

  <!-- BOOTSTRAP 3 -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- FONTAWESOME -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- SLICK -->
  <link rel="stylesheet" type="text/css" href="dist/assets/js/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="dist/assets/js/slick/slick-theme.css"/>

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="dist/assets/css/style.min.css?v=<?= date(ymsi); ?>">

</head>
<body id="top">
<!-- Loader -->
  <div class="<?php if(!isset($_SESSION['loader'])){ echo "loader";}?>">
    <div id="<?php if(!isset($_SESSION['loader'])){ echo "myProgress";}?>">
      <div id="<?php if(!isset($_SESSION['loader'])){ echo "myBar";}?>"></div>
    </div>
  </div>
  <?php $_SESSION["loader"] = true; ?>

  <!-- header -->
  <?php include ('pages/header.php'); ?>


  <?= $content; ?>




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
  <!-- Slick -->
  <script type="text/javascript" src="dist/assets/js/slick/slick.min.js?v=<?= date(ymsi); ?>"></script>
  <!-- Effet d'écriture entre guillemets -->
  <script type="text/javascript" src="dist/assets/js/textillate/jquery.textillate.js?v=<?= date(ymsi); ?>"></script>
  <script type="text/javascript" src="dist/assets/js/textillate/assets/jquery.lettering.js?v=<?= date(ymsi); ?>"></script>
  <script type="text/javascript" src="dist/assets/js/textillate/assets/jquery.fittext.js?v=<?= date(ymsi); ?>"></script>
  <!-- Scrollify pour effet de changement de page au scroll -->
  <script type="text/javascript" src="dist/assets/js/scrollify/jquery.scrollify.min.js?v=<?= date(ymsi); ?>"></script>
  <!-- Custom JS -->
  <script type="text/javascript" src="dist/assets/js/script.js?v=<?= date(ymsi); ?>"></script>

</body>
</html>
