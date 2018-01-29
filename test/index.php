<?php require('cockpit/bootstrap.php'); ?>
<?php require_once('route.php'); ?>

<!DOCTYPE HTML>
<html lang="fr">
<head>

  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <title><?= $title; ?></title>
  <meta name="description" content="">

  <meta property="og:url" content="<?= $url.$_SERVER['REQUEST_URI']; ?>"/>
  <meta property="og:site_name" content="3S Motors" />
  <meta property="og:image" content="<?= $url.$og_img; ?>" />
  <meta property="og:title" content="<?= $title; ?>"/>
  <meta property="og:description" content="" />
  <meta property="og:type" content="article" />

  <!-- LIB -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

  <!-- BOOTSTRAP -->
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
  <!-- CUSTOM -->
  <link rel="stylesheet" href="/assets/css/style.min.css?v=<?= date(ymsi); ?>">

</head>
<!-- header -->
  <?php include ('dist/header.php'); ?>

<body>

<?= $content; ?>

<!-- Loader -->
<div class="<?php if(!isset($_SESSION['loader'])){ echo "loader";}?>">
  <div class="<?php if(!isset($_SESSION['loader'])){ echo "logo-tampon-loader";}?>"></div>
  <div><h3 class="<?php if(!isset($_SESSION['loader'])){ echo "text-center loading";}else{echo "display-none";}?>">Loading...</h3></div>
  <div id="<?php if(!isset($_SESSION['loader'])){ echo "myProgress";}?>">
    <div id="<?php if(!isset($_SESSION['loader'])){ echo "myBar";}?>"></div>
  </div>
</div>
<?php $_SESSION["loader"] = true; ?>


<!-- footer -->
  <?php include ('dist/footer.php'); ?>

<!-- Button run to top / smoothscroll -->
  <a href="#top" class="run-to-top"><img class="black" src="/uploads/images/ladame_up.svg" alt=""></a>
  <a href="#top" class="run-to-top"><img class="white" src="/uploads/images/ladame_up_white.svg" alt=""></a>



<script type="text/javascript" src="dist/assets/scrollify/jquery.scrollify.min.js?v=<?= date(ymsi); ?>"></script>
<script type="text/javascript" src="dist/assets/js/script.min.js?v=<?= date(ymsi); ?>"></script>

</body>
</html>
