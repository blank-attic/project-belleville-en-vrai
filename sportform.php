<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inscription Participants</title>
  <link rel="stylesheet" href="assets/css/sportformstyle.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
</head>
<body>
  <?php
  // //connection bdd
  require_once ("_db.php");
  // charge les classes
  spl_autoload_register(function($blaze) {
    return require("class/" . $blaze . ".php");
  });
  //vérifie si il y a une requete post en cours
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
    $teamname = isset($_POST["teamname"]) ? $_POST["teamname"] : "";
    $categorie = isset($_POST["categorie"]) ? $_POST["categorie"] : "";
    $quartier = isset($_POST["quartier"]) ? $_POST["quartier"] : "";
    $refname = isset($_POST["refname"]) ? $_POST["refname"] : "";
    $natation = isset($_POST["natation"]) ? $_POST["natation"] : "";
    $course = isset($_POST["course"]) ? $_POST["course"] : "";
    $pingpong = isset($_POST["pingpong"]) ? $_POST["pingpong"] : "";
    $tel = isset($_POST["tel"]) ? $_POST["tel"] : "";

    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $bdate = isset($_POST["bdate"]) ? $_POST["bdate"] : "";

    //creation d'une nouvelle équipe
    $team = new Team($teamname, $categorie, $quartier, $refname, $natation, $course, $pingpong);
    //validation des data-inputs team
    $errors = $team->validate();
    echo "<ul id='error'>";
    if (count($errors) == 0) {
      $dao = new TeamDAO();
      //vérifie si l'équipe existe déja
      $checkteam = $dao->find($_DB, $team->getTeamname());
      if ($checkteam["teamname"] !== $team->getTeamname()) {
        //save in db
        if($dao->save($_DB, $team)) {

        }
      } else {
        echo "<li>le nom de votre équipe est déja utilisé, !!</li>";
      }
    } else {
      for ($i = 0; $i < count($errors); $i++) {
        echo "<li>" . $errors[$i] . "</li>";
      }
    }
    echo "</ul>";

    $team = $dao->find($_DB, $team->getTeamname());

    if (count($errors) == 0 ||
    isset($team["id"])) {
      for ($i = 0 ; $i < count($name); $i++){
        //creation d'un nouveau player
        $player = new Player($name[$i], $tel, $bdate[$i]);
        //validation des data-inputs player
        $errors = array_merge($errors, $player->validate());
        echo "<ul id='error'>";
        if (count($errors) == 0) {
          $dao = new PlayerDAO();
          //vérifie si le player existe déja
          $checkplayer = $dao->find($_DB, $player->getTeamId(), $player->getName(), $player->getTel(), $player->getDate(), $player->getTeamLeader());
          if ($checkplayer["name"] !== $player->getName()
          || $checkplayer["bdate"] !== $player->getDate()){

            if ($i > 0) {
              $player->setTeamLeader(0);
            } else {
              $player->setTeamLeader(1);
            }

            $player->setTeamId($team["id"]);
            var_dump($player);
            //save in db
            if($dao->save($_DB, $player)) {
              header('Location: bravo.php');
            }
          } else {
            echo "<li>l'un de vos Joueur est déja présent dans une autre équipe !</li>";
          }
        } else {
          for ($i = 0; $i < count($errors); $i++) {
            echo "<li>" . $errors[$i] . "</li>";
          }
        }
        echo "</ul>";
      }
    }
  }
  ?>
  <div class="bio">
    <h1>C’est l’heure de s’inscrire pour pouvoir concourir et remporter cette nouvelle édition du tournoi du Grand Belleville !<h1>
    <h2>Munissez de vos meilleures baskets, maillots de bain et tenues de sports pour montrer vos compétences sportives au grand jour.
    Il vous suffit juste de remplir le formulaire suivant :</h2>
    </div>
    <div class="formbase" id="spform">
      <form action="sportform.php" method="POST">
        <h3>FORMULAIRE INSCRIPTION TOURNOI</h3>
        <div class="space">
        </div>
        <h2>Ta Catégorie :</h2>
        <p>Tu es dans quelle catégorie ?</p>
        <div class="radiobutt">
          <div>
            <label for="cpt">Petit(e)s (10-13 ans)</label>
            <input id="cpt" type="radio" name="categorie" value="Petit">
          </div>
          <div>
            <label for="cm">Moyen(ne)s (14-17 ans)</label>
            <input id="cm" type="radio" name="categorie" value="Moyen">
          </div>
          <div>
            <label for="cgd">Grand(e)s (18-25 ans)</label>
            <input type="radio" name="categorie" value="Grand">
          </div>
        </div>
        <h2>Ton Quartier :</h2>
        <p>Quel est ton Quartier ?</p>
        <div class="radiobutt">
          <div>
            <label for="reb">REBEVAL</label>
            <input id="reb" type="radio" name="quartier" value="rebeval">
          </div>
          <div>
            <label for="piat">PIAT</label>
            <input id="piat" type="radio" name="quartier" value="piat">
          </div>
          <div>
            <label for="ramp">RAMPONEAU</label>
            <input type="radio" name="quartier" value="ramponeau">
          </div>
          <div>
            <label for="ori">ORILLON</label>
            <input id="ori" type="radio" name="quartier" value="orillon">
          </div>
        </div>
        <p>Quel Grand de ton Quartier participe à l'organisation de Belleville En Vrai 8 ?</p>
        <div class="divcol">
          <div>
            <label for="ref">Notre référent est :</label>
            <input id="ref" type="text" name="refname" value="" placeholder="Prénom du Référent">
          </div>
        </div>
        <h2>Votre Equipe :</h2>
        <p>Quel est le nom de votre équipe ?
          <span id="tnwarnin">(pas de Zoo ou de Zou dans les noms d'équipe !!)</span>
        </p>
        <div class="divcol">
          <div>
            <label for="teamname">Notre équipe c'est :</label>
            <input type="text" id="teamname" name="teamname" placeholder="Le nom de votre équipe ">
          </div>
        </div>
        <p>Qui fait partie de votre équipe ?</p>
        <div class="divcol">
          <div>
            <label for="j1">Quel est le prénom du JOUEUR 1 (Capitaine) ?</label>
            <input type="text" id="j1" name="name[]" placeholder="JOUEUR 1 (Cap)">
          </div>
        </div>
        <div class="divrow">
          <div>
            <label for="telj1">Quel est son numéro de Téléphone :</label>
            <input type="tel" id="telj1" name="tel" placeholder="numéro de tél." >
          </div>
          <div>
            <label for="datej1">Quel est sa date de Naissance :</label>
            <input type="date" id="datej1" name="bdate[]" placeholder="JJ/MM/AAAA">
          </div>
        </div>
        <br/>
        <div class="divcol">
          <div>
            <label for="j2">Quel est le prénom du JOUEUR 2 ?</label>
            <input type="text" id="j2" name="name[]" placeholder="JOUEUR 2">
          </div>
        </div>
        <div class="divrow">
          <!-- <div>
          <label for="telj2">Quel est son numéro de Téléphone :</label>
          <input type="tel" id="telj2" name="tel2" value="" placeholder="numéro de tél.">
        </div> -->
        <div>
          <label for="datej2">Quel est sa date de Naissance :</label>
          <input type="date" id="datej2" name="bdate[]" placeholder="JJ/MM/AAAA">
        </div>
      </div>
      <br/>
      <div class="divcol">
        <div>
          <label for="j3">Quel est le prénom du JOUEUR 3 ?</label>
          <input type="text" id="j3" name="name[]" placeholder="JOUEUR 3">
        </div>
      </div>
      <div class="divrow">
        <!-- <div>
        <label for="telj3">Quel est son numéro de Téléphone :</label>
        <input type="tel" id="telj3" name="tel3" value="" placeholder="numéro de tél.">
      </div> -->
      <div>
        <label for="datej3">Quel est sa date de Naissance :</label>
        <input type="date" id="datej3" name="bdate[]" placeholder="JJ/MM/AAAA">
      </div>
    </div>
    <br/>
    <div class="divcol">
      <div>
        <label for="j4">Quel est le prénom du JOUEUR 4 ?</label>
        <input type="text" id="j4" name="name[]" placeholder="JOUEUR 4">
      </div>
    </div>
    <div class="divrow">
      <!-- <div>
      <label for="telj4">Quel est son numéro de Téléphone :</label>
      <input type="tel" id="telj4" name="tel4" value="" placeholder="numéro de tél.">
    </div> -->
    <div>
      <label for="datej4">Quel est sa date de Naissance :</label>
      <input type="date" id="datej4" name="bdate[]" placeholder="JJ/MM/AAAA">
    </div>
  </div>
  <br/>
  <div class="divcol">
    <div>
      <label for="j5">Quel est le prénom du JOUEUR 5 ?</label>
      <input type="text" id="j5" name="name[]" placeholder="JOUEUR 5">
    </div>
  </div>
  <div class="divrow">
    <!-- <div>
    <label for="telj5">Quel est son numéro de Téléphone :</label>
    <input type="tel" id="telj5" name="tel5" value="" placeholder="numéro de tél.">
  </div> -->
  <div>
    <label for="datej5">Quel est sa date de Naissance :</label>
    <input type="date" id="datej5" name="bdate[]" placeholder="JJ/MM/AAAA">
  </div>
</div>
<br/>
<div class="divcol">
  <div>
    <label for="j6">Quel est le prénom du JOUEUR 6 ?</label>
    <input type="text" id="j6" name="name[]" placeholder="JOUEUR 6">
  </div>
</div>
<div class="divrow">
  <!-- <div>
  <label for="telj6">Quel est son numéro de Téléphone :</label>
  <input type="tel" id="telj6" name="tel6" value="" placeholder="numéro de tél.">
</div> -->
<div>
  <label for="datej6">Quel est sa date de Naissance :</label>
  <input type="date" id="datej6" name="bdate[]" placeholder="JJ/MM/AAAA">
</div>
</div>
<br/>
<div class="divcol">
  <div>
    <label for="j7">Quel est le prénom du JOUEUR 7 ?</label>
    <input type="text" id="j7" name="name[]" placeholder="JOUEUR 7">
  </div>
</div>
<div class="divrow">
  <!-- <div>
  <label for="telj7">Quel est son numéro de Téléphone :</label>
  <input type="tel" id="telj7" name="tel7" value="" placeholder="numéro de tél.">
</div> -->
<div>
  <label for="datej7">Quel est sa date de Naissance :</label>
  <input type="date" id="datej7" name="bdate[]" placeholder="JJ/MM/AAAA">
</div>
</div>
<br/>
<div class="divcol">
  <div>
    <label for="j8">Quel est le prénom du JOUEUR 8 ?</label>
    <input type="text" id="j8" name="name[]" placeholder="JOUEUR 8">
  </div>
</div>
<div class="divrow">
  <!-- <div>
  <label for="telj8">Quel est son numéro de Téléphone :</label>
  <input type="tel" id="telj8" name="tel8" value="" placeholder="numéro de tél.">
</div> -->
<div>
  <label for="datej8">Quel est sa date de Naissance :</label>
  <input type="date" id="datej8" name="bdate[]" placeholder="JJ/MM/AAAA">
</div>
</div>
<br/>
<br/>
<!-- <h2>Disciplines Sportives :</h2> -->
<h3>Choisis parmi les 8 Joueurs de votre équipe :</h3>


<!-- a partir de là  -->
<!-- <p>Les Nageur(se)s :</p> -->
<div class="divcol">
  <div>
    <label for="nat1">les 3 Nageur(se)s :</label>
    <input id="nat1"type="text" name="natation" placeholder="écris ici les prenoms Nageur(se)1 / Nageur(se)2 / Nageur(se)3" >
  </div>
  <!-- <div>
  <label for="nat2">Nageur(se) 2 :</label>
  <input id="nat2"type="text" name="natation[]" placeholder="écris le prénom du Nageur(se) 2" >
</div>
<div>
<label for="nat3">Nageur(se) 3 :</label>
<input id="nat3"type="text" name="natation[]" placeholder="écris le prénom du Nageur(se) 3" >
</div> -->
</div>
<!-- <p>Les Coureur(se)s :</p> -->
<div class="divcol">
  <div>
    <label for="run1">Les 2 Coureur(se)s:</label>
    <input id="run1"type="text" name="course" placeholder="écris ici les prénoms Coureur(se)1 / Coureur(se)2" >
  </div>
  <!-- <div>
  <label for="run2">Coureur(se) 2 :</label>
  <input id="run2"type="text" name="course" placeholder="écris le prénom du Coureur(se) 2" >
</div> -->
</div>
<!-- <p>Les Joueur(se)s de PING-PONG :</p> -->
<div class="divcol">
  <div>
    <label for="pp1">Les 2 Joueur(se)s :</label>
    <input type="text" name="pingpong" placeholder="écris ici les prénoms du Joueur(se)1 / Joueur(se)2" >
  </div>
  <!-- <div>
  <label for="pp2">Joueur(se) 2 :</label>
  <input type="text" name="pingpong" placeholder="écris le prénom du Joueur(se) 2" >
</div> -->
</div>
<div>
  <input id="spsub" type="submit" name="sportsub" value="CLIQUES ICI POUR INSCRIRE VOTRE EQUIPE">
</div>
</form>
</div>
</body>
</html>
