<?php
require_once ("_db.php");
if (!isset($_GET["teamname"])) {
  header('Location: index.php');
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Belleville En Vrai</title>
  <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
</head>
<body>

  <div class="bravo">
    <h1>BRAVO TON EQUIPE EST INSCRITE POUR LE TOURNOIS !</h1>
    <h2>PREPAREZ VOUS, ENTRAINEZ VOUS !.. </h2>
    <h1>...Bonne Chance ! ET que la MEILLEURE EQUIPE GAGNE !</h1>
  </div>
  </body>
</html>
