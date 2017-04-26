<?php
require_once("_db.php");

spl_autoload_register(function ($class) {
  include 'class/' . $class . '.php';
});

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ce site est une présentation du Festival du Quartier BELLEVILLE, Belleville En Vrai"/>
  <meta name="author" content="Laurent Abemango alias LAWD / Badis Nakhli / Abdoulaye Ndao"/>
  <title>Bénévoles</title>
  <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/mqstyle.css" media="screen" type="text/css">
</head>
<body>
  <h1>LISTE DE BENEVOLES BEV 8 (2017) :</h1>
  <div class="space">
  </div>
  <div class="bluebg">
    <?php
    //create dao
    $dao = new ParticipationDAO();
    //get all volunteers
    $volunteers = $dao->getAll($_DB);
    echo "<table class='volunteers'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Contact</th>";
    echo "<th>Email</th>";
    echo "<th>Tel</th>";
    echo "<th>Discipline</th>";
    echo "<th>Participants</th>";
    echo "<th>Descirption</th>";
    echo "<th>Déjà présenté ?</th>";
    echo "<th>Lien</th>";
    echo "</tr>";
    echo "<tbody>";
    foreach ($volunteers as $k => $v) {
      echo "<tr class='volunteer'>";
      echo "<td>$v[email]</td>";
      echo "<td>$v[nom]</td>";
      echo "<td>$v[tel]</td>";
      echo "<td>$v[contact]</td>";
      echo "<td>$v[discipline]</td>";
      echo "<td>$v[participants]</td>";
      echo "<td>$v[descriptions]</td>";
      echo "<td>$v[dejapresenteoupas]</td>";
      echo "<td>$v[lien]</td>";
      echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    ?>
  </div>
</body>
</html>
