<?php
require_once('_db.php');
if (!isset($_GET["firstname"])) {
  header("location:merci.php?firstname=['firstname']");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ce site est une présentation du Festival du Quartier BELLEVILLE, Belleville En Vrai"/>
  <meta name="author" content="Laurent Abemango alias LAWD / Badis Nakhli / Abdoulaye Ndao"/>
  <title>MERCI !!!</title>
  <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/mqstyle.css" media="screen" type="text/css">
</head>
  <body>
    <div class="thxmsg">
      <?php
        echo "<h1 id='thxmsg'>MERCI ".(isset($_GET["firstname"]) ? $_GET["firstname"] : '')." pour ta contribution !</h1><h1>Et pour toute autre information tu peux toujours nous contacter sur : inscriptionsbev@gmail.com </h1>";
       ?>
     </div>

  </body>
</html>
