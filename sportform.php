<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ce site est une présentation du Festival du Quartier BELLEVILLE, Belleville En Vrai"/>
  <meta name="author" content="Laurent Abemango alias LAWD / Badis Nakhli / Abdoulaye Ndao"/>
  <title>Inscriptions Tournoi</title>
  <link rel="stylesheet" href="assets/css/sportformstyle.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link href="assets/vendor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/menustyle.css" type="text/css">
  <link rel="stylesheet" href="assets/css/mqstyle.css" media="screen" type="text/css">
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
  <?php
  require('_menu.php');
   ?>
  <div class="bio">
    <h1>C'est l'heure d'inscrire votre équipe à la nouvelle édition de Belleville en Vrai les 19, 20 et 21 mai prochains.</h1>
    <h2>Attention il faut être huit pour s'inscrire. Dans chaque catégorie, les quatre premières équipes de chaque quartier seront prioritaires, les autres seront sur liste d'attente.
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
          <input id="cpt" type="radio" name="categorie" value="Petit">
          <label for="cpt">Petit(e)s (10-13 ans)</label>
        </div>
        <div>
          <input id="cm" type="radio" name="categorie" value="Moyen">
          <label for="cm">Moyen(ne)s (14-17 ans)</label>
        </div>
        <div>
          <input type="radio" name="categorie" value="Grand">
          <label for="cgd">Grand(e)s (18-25 ans)</label>
        </div>
      </div>
      <h2>Ton Quartier :</h2>
      <p>Quel est ton Quartier ?</p>
      <div class="radiobutt">
        <div>
          <input id="reb" type="radio" name="quartier" value="rebeval">
          <label for="reb">REBEVAL</label>
        </div>
        <div>
          <input id="piat" type="radio" name="quartier" value="piat">
          <label for="piat">PIAT</label>
        </div>
        <div>
          <input type="radio" name="quartier" value="ramponeau">
          <label for="ramp">RAMPONEAU</label>
        </div>
        <div>
          <input id="ori" type="radio" name="quartier" value="orillon">
          <label for="ori">ORILLON</label>
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
        <div>
          <label for="datej8">Quel est sa date de Naissance :</label>
          <input type="date" id="datej8" name="bdate[]" placeholder="JJ/MM/AAAA">
        </div>
      </div>
      <br/>
      <br/>
      <h3>Choisis parmi les 8 Joueurs de votre équipe :</h3>
        <div class="divcol">
          <div>
            <label for="nat1">les 2 Nageur(se)s :</label>
            <input id="nat1"type="text" name="natation" placeholder="écris ici les prenoms Nageur(se)1 / Nageur(se)2 " >
          </div>
        </div>
        <div class="divcol">
          <div>
            <label for="run1">Les 3 Coureur(se)s:</label>
            <input id="run1"type="text" name="course" placeholder="écris ici les prénoms Coureur(se)1 / Coureur(se)2 / Coureur(se)3" >
          </div>
        </div>
        <div class="divcol">
          <div>
            <label for="pp1">Les 2 Pongistes (Tennis de Table) :</label>
            <input type="text" name="pingpong" placeholder="écris ici les prénoms du Joueur(se)1 / Joueur(se)2" >
          </div>
        </div>
        <div class="divrow">
          <input id="spsub" type="submit" name="submit" value="GO">
        </div>
      </form>
    </div>
    <?php
    require('_footer.php');
     ?>
  </body>
</html>
