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
        <title>View Team</title>
        <link rel="stylesheet" href="assets/css/sportformstyle.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    </head>
    <body>
        <h1>LISTE DES ÉQUIPES POUR BEV 8 (2017) :</h1>
        <div class="space">
        </div>
        <?PHP
        $dao = new TeamDAO();
        $team = $dao->getAllTeams($_DB);
        $nb_team = count($team);
        echo "<p>Nombre d'équipes : <b> $nb_team</b></p>";
        ?>

        <div class="bluebg">
            <?php
            //create dao

              echo "<table class ='teams'>";
              echo "<thead>";
              echo "<tr>";
              echo "<th>Nom de l'équipe</th>";
              // echo "<th>Capitaine de l'équipe</th>";
              echo "<th>Categorie</th>";

              echo "<th>Course</th>";
              echo "<th>Natation</th>";
              echo "<th>PingPong</th>";
              echo "<th>Refname</th>";
              echo "<th>Quartier</th>";
              echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
              foreach ($team as $k => $v) {
              echo "<tr class='team'>";
              echo "<td>$v[teamname]</td>";
              // echo ($v["team_leader"] == 1 ? "<td class='bigx'>x</td>" : "<td></td>");
              echo "<td>$v[categorie]</td>";
              echo "<td>$v[course]</td>";
              echo "<td>$v[natation]</td>";
              echo "<td>$v[pingpong]</td>";
              echo "<td>$v[refname]</td>";
              echo "<td>$v[quartier]</td>";
              echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            ?>
          </div>
          <div class="space">
          </div>
          <div class="bluebg">

            <?php
            $dao = new PlayerDAO();
            //get all volunteersoih
            $players = $dao->getAllPlayersAndTeam($_DB);
            echo "<table class='players'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Prénom</th>";
            echo "<th>Date de naissance</th>";
            echo "<th>Référent</th>";
            echo "<th>Tel chef d'équipe</th>";
            echo "<th>Chef d'équipe ?</th>";
            echo "<th>Nom de l'équipe</th>";
            echo "<th>Catégorie</th>";
            echo "<th>Quartier</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($players as $k => $v) {
                echo "<tr class='players'>";
                echo "<td>$v[name]</td>";
                echo "<td>$v[bdate]</td>";
                echo "<td>$v[refname]</td>";
                echo "<td>$v[tel]</td>";
                echo ($v["team_leader"] === 1 ? "<td class='bigx'>x</td>" : "<td></td>");
                echo "<td>$v[teamname]</td>";
                echo "<td>$v[categorie]</td>";
                echo "<td>$v[quartier]</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            ?>
          </div>
    </body>
</html>
