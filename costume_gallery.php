<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ce site est une présentation du Festival du Quartier BELLEVILLE, Belleville En Vrai"/>
  <meta name="author" content="Laurent Abemango alias LAWD / Badis Nakhli / Abdoulaye Ndao"/>
  <title>BELLEVILLE EN VRAI</title>
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link href="assets/vendor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
  <link rel="stylesheet" href="assets/css/menustyle.css" type="text/css">
  <link rel="stylesheet" href="assets/css/mqstyle.css" media="screen" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.4.5/galleria.min.js"></script>
</head>
  <body>
    <?php
      require('_menu.php');
     ?>
    <div class="galleria">
         <img src="assets/images/bev_costume/bev_costume_5.jpg">
         <img src="assets/images/bev_costume/bev_costume_8.jpg">
         <img src="assets/images/bev_costume/bev_costume_2.jpg">
         <img src="assets/images/bev_costume/bev_costume_3.jpg">
         <img src="assets/images/bev_costume/bev_costume_4.jpg">
         <img src="assets/images/bev_costume/bev_costume_20.jpg">
         <img src="assets/images/bev_costume/bev_costume_6.jpg">
         <img src="assets/images/bev_costume/bev_costume_7.jpg">
         <img src="assets/images/bev_costume/bev_costume_9.jpg">
         <img src="assets/images/bev_costume/bev_costume_10.jpg">
         <img src="assets/images/bev_costume/bev_costume_11.jpg">
         <img src="assets/images/bev_costume/bev_costume_13.jpg">
         <img src="assets/images/bev_costume/bev_costume_14.jpg">
         <img src="assets/images/bev_costume/bev_costume_15.jpg">
         <img src="assets/images/bev_costume/bev_costume_16.jpg">
         <img src="assets/images/bev_costume/bev_costume_17.jpg">
         <img src="assets/images/bev_costume/bev_costume_18.jpg">
         <img src="assets/images/bev_costume/bev_costume_1.jpg">
         <img src="assets/images/bev_costume/bev_costume_19.jpg">
     </div>
     <h6>Photos :<a href="http://clementduquenne.com/" target="_blank" class="contlink"> Clément Duquenne</a></h6>

     <?php
       require('_footer.php');
      ?>
      <script>
  (function() {
            Galleria.loadTheme('https://cdnjs.cloudflare.com/ajax/libs/galleria/1.4.5/themes/classic/galleria.classic.min.js');
            Galleria.configure({
              transition: 'fade',
              imageMargin: 10,
              height: 800,
              lightbox: true
             });
            Galleria.run('.galleria',{autoplay: 3000});
        }());
        </script>
        <?php
        require('_footer.php');
         ?>
  </body>
</html>
