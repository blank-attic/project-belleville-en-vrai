<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ce site est une présentation du Festival du Quartier BELLEVILLE, Belleville En Vrai"/>
  <meta name="author" content="Laurent Abemango alias LAWD / Badis Nakhli / Abdoulaye Ndao"/>
  <title>BRAVO !!!</title>
  <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/mqstyle.css" media="screen" type="text/css">
</head>
<body>

  <div class="txtbg">
    <div class="thxmsg">

      <?php
        echo "<h1>BRAVO ". (isset($_GET["teamname"]) ? $_GET["teamname"] : '')." !</h1><h1>VOTRE EQUIPE EST INSCRITE POUR LE TOURNOI !</h1>
        <h2>PREPAREZ VOUS, ENTRAINEZ VOUS !.. </h2>
        <h1>...Bonne Chance !</h1><h1> ET que la MEILLEURE EQUIPE GAGNE !</h1>";
       ?>
     </div>

  </div>
  </body>
</html>
