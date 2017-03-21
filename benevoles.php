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
  <title>Inscription Bénévole</title>
  <link rel="stylesheet" href="assets/css/sportformstyle.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
</head>
<body>
  <h1>LISTE DE BENEVOLES BEV 8 (2017) :</h1>
  <div class="space">
  </div>
  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == "bev"
    && $pass == "bev")
    {
      ?>
      <div class="bluebg">
        <?php
        //create dao
        $dao = new VolunteerDAO();

        //get all volunteers
        $volunteers = $dao->getAll($_DB);

        echo "<table class='volunteers'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Prénom</th>";
        echo "<th>Nom</th>";
        echo "<th>Tel</th>";
        echo "<th>Email</th>";
        echo "<th>TShirt</th>";
        echo "<th>Vendredi 19 mai (18h-21h)</th>";
        echo "<th>Samedi 20 mai (8h-13h)</th>";
        echo "<th>Samedi 20 mai (13h-20h)</th>";
        echo "<th>Dimanche 21 mai (8h-13h)</th>";
        echo "<th>Dimanche 21 mai (13h-20h)</th>";
        echo "<th>Encadrement Sportif</th>";
        echo "<th>Logistique</th>";
        echo "<th>Photo</th>";
        echo "<th>Vidéo</th>";
        echo "<th>Accueil/Loges Artistes</th>";
        echo "<th>Cuisine</th>";
        echo "<th>Accueil/Propreté</th>";
        echo "<th>Commentaires</th>";
        echo "</tr>";
        echo "<tbody>";
        foreach ($volunteers as $k => $v) {
          echo "<tr class='volunteer'>";
          echo "<td>$v[prenom]</td>";
          echo "<td>$v[nom]</td>";
          echo "<td>$v[tel]</td>";
          echo "<td>$v[email]</td>";
          echo "<td>$v[taille_tshirt]</td>";

          //dispos with bitwise flags
          $dispos = new Dispo(array());
          $dispos->setFlags($v["dispo"]);
          echo ($dispos->isVendredi() ? "<td class='bigx'>x</td>" : "<td></td>");
          echo ($dispos->isSamediAM() ? "<td class='bigx'>x</td>" : "<td></td>");
          echo ($dispos->isSamediPM() ? "<td class='bigx'>x</td>" : "<td></td>");
          echo ($dispos->isDimancheAM() ? "<td class='bigx'>x</td>" : "<td></td>");
          echo ($dispos->isDimanchePM() ? "<td class='bigx'>x</td>" : "<td></td>");

          //task with bitwise flags
          $tasks = new Task(array());
          $tasks->setFlags($v["tache"]);
          echo ($tasks->isEncadrementSportif() ? "<td>x</td>" : "<td></td>");
          echo ($tasks->isLogistique() ? "<td class='bigx'>x</td>" : "<td></td>");
          echo ($tasks->isPhoto() ? "<td class='bigx'>x</td>" : "<td></td>");
          echo ($tasks->isVideo() ? "<td class='bigx'>x</td>" : "<td></td>");
          echo ($tasks->isAccueilArtiste() ? "<td class='bigx'>x</td>" : "<td></td>");
          echo ($tasks->isCuisine() ? "<td class='bigx'>x</td>" : "<td></td>");
          echo ($tasks->isAccueilProprete() ? "<td class='bigx'>x</td>" : "<td></td>");
          echo "<td>$v[message]</td>";

          echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
      } ?>
    </div>
    <?php
  }

  if ($_SERVER["REQUEST_METHOD"] === "GET" ||
  ($_SERVER["REQUEST_METHOD"] === "POST" && (
    $_POST['user'] !== "bev" ||
    $_POST['pass'] !== "bev"))) {
      ?>
      <h2>Veuillez vous connecter pour accéder à la liste de Bénévoles :</h2>
      <div class="formbase">
        <form method="POST" action="benevoles.php">
          <div class="divrowc">
            <label for="usr">Nom :</label>
            <input id="usr" type="text" name="user"></input>
            <label for="pwd">Mot de Passe :</label>
            <input id="pwd" type="password" name="pass"></input>
          </div>
          <div class="divrow">
            <input id="adsub" type="submit" name="submit" value="Go"></input>
          </div>
        </form>
      </div>
      <?php
    }
    ?>
  </body>
  </html>
