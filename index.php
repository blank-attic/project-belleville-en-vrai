<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ce site est une présentation du Festival du Quartier BELLEVILLE, Belleville En Vrai"/>
  <meta name="author" content="Laurent Abemango alias LAWD et Badis Nakhli et Abdoulaye Ndao"/>
  <title>Belleville En Vrai</title>
  <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/mqstyle.css" media="screen" type="text/css">
</head>
<body>
  <header id="hdrndx">
    <div class="logo">
      <img src="assets/images/NewLogo_BEV_wht.png" alt="affiche bev 8">
    </div>
  </header>
  <?php
  require ('car.php');
  ?>
  <div>
    <?php
      require('_menu.php');
     ?>
  </div>
  <div class="space"></div>
  <div class="txtbg">
    <div class="vidprez">
      <iframe src="https://player.vimeo.com/video/211642278" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
  <div>
    <?php
    require('_footer.php');
    ?>
  </div>
</body>
</html>
