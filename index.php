<?php require('cockpit/bootstrap.php'); ?>
<?php require_once('route.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>3S Motors</title>

  <!-- BOOTSTRAP 3 -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="dist/assets/css/style.min.css?v=<?= date(ymsi); ?>">

</head>
<body>

  <!-- header -->
  <?php include ('pages/header.php'); ?>


  <?= $content; ?>

  <!-- footer -->
  <?php include ('pages/footer.php'); ?>

  <!-- Button run to top / smoothscroll -->
  <a href="#top" class="run-to-top"><img src="" alt=""></a>

  <!-- SCRIPTS -->

  <!-- jQuery -->
  <script src="http://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
  <!-- Bootstrap 3 -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- Scrollify -->
  <script type="text/javascript" src="dist/assets/js/scrollify/jquery.scrollify.min.js?v=<?= date(ymsi); ?>"></script>
  <!-- Custom JS -->
  <script type="text/javascript" src="dist/assets/js/script.js?v=<?= date(ymsi); ?>"></script>

</body>
</html>
