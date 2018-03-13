<?php require('cockpit/bootstrap.php');
      require_once('route.php');
// $base_url = 'http://' . $_SERVER['HTTP_HOST'];
// $current_url = $base_url. $_SERVER['REQUEST_URI'];
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
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


  <!-- BOUTON > MODAL OPTION MORPHING -->
  <link rel="stylesheet" href="dist/assets/js/morphing/css/reset.css"> <!-- CSS reset -->

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

  <!-- Scrollify pour effet de changement de page au scroll -->
  <script type="text/javascript" src="dist/assets/js/scrollify/jquery.scrollify.min.js?v=<?= date(ymsi); ?>"></script>

  <!-- Custom JS -->
  <script type="text/javascript" src="dist/assets/js/script.js?v=<?= date(ymsi); ?>"></script>

</body>
</html>
