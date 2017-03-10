<?php
// //connection bdd
require_once ("_db.php");
// charge les classes
spl_autoload_register(function($blaze) {
  return require("class/" . $blaze . ".php");
});
//vérifie si il y a une requete post en cours
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
  $name = isset($_POST["name"]) ? $_POST["name"] : "";
  $tel = isset($_POST["tel"]) ? $_POST["tel"] : "";
  $email = isset($_POST["email"]) ? $_POST["email"] : "";
  //creation d'un nouveau benevole
  $volunteer = new Volunteer($name, $firstname, $tel, $email);
  //validation des data-inputs volunteer
  $errors = $volunteer->validate();
  echo "<ul id='error'>";
  // indication css : style='padding:2em;color:red;'
  if (count($errors) == 0) {
    $dao = new VolunteerDAO();
    //vérifie si le bénévole existe déja
    $checkvolunteer = $dao->find($_DB, $volunteer->getFirstname(), $volunteer->getName(), $volunteer->getTel());
    if ($checkvolunteer["firstname"] !== $volunteer->getFirstname()
    || $checkvolunteer["name"] !== $volunteer->getName()
    || $checkvolunteer["tel"] !== $volunteer->getTel()) {
      //save in db
      if($dao->save($_DB, $volunteer)) {
        echo "<h1 id='thxmsg'>MERCI ".$firstname." ! Tu es MA-GNI-FIQUE !</h1>";
        // no auth needed cause no connection from benevole

      }
    } else {
      echo "<li>Tu fais déja partie de la TEAM !!</li>";
    }
  } else {
    for ($i = 0; $i < count($errors); $i++) {
      echo "<li>" . $errors[$i] . "</li>";
    }
  }
  echo "</ul>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inscription Bénévole</title>
  <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
</head>
<body>
  <!-- <h1>BELLEVILLE EN VRAI 8 a besoin de TOI !</h1>
  <p>Pour sa 8ème édition (et oui déja !!!), le Festival BELLEVILLE EN VRAI,qui aura lieu du 19 au 21 Mai 2017, recrute des Bénévoles !!</p>
  <h2>REJOINS NOUS pour 3 jours de Fête tous ensemble !</h2> -->
  <div id="bform">
    <form action="beneform.php" method="POST">
      <p>Remplis ce formulaire pour t'inscrire afin que l'on sache Qui, Quand et Quoi pour pouvoir organiser le Comment !</p>
      <div class="pers">
        <label for="firstname">TON PRENOM :</label>
        <input type="text" id="firstname" name="firstname" placeholder="écris ici ton prenom"/><br>
        <label for="nom">TON NOM :</label>
        <input type="text" id="nom" name="name" placeholder="écris ici ton nom"/><br>
        <label for="tel">TON NUMERO DE TEL :</label>
        <input type="tel" id="tel" name="tel" placeholder="écris ici ton numéro de téléphone"/><br>
        <label for="mail">TON E-MAIL :</label>
        <input type="email" id="mail" name="email" placeholder="écris ici ton E-mail"/><br>
      </div>
      <p> Choisis quand tu peux nous aider :</p>
      <div id="dispocheck">
        <input type="checkbox" name="dispo[]" value="Vendredi:18-21h"/> Vendredi 19 mai (18h-21h)<br>
        <input type="checkbox" name="dispo[]" value="Samedi:8-13h"/> Samedi 20 mai (8h-13h)<br>
        <input type="checkbox" name="dispo[]" value="Samedi:13-20h"/> Samedi 20 mai (13h-20h)<br>
        <input type="checkbox" name="dispo[]" value="Dimanche:8-13h"/> Dimanche 21 mai (8h-13h)<br>
        <input type="checkbox" name="dispo[]" value="Dimanche:13-20h"/> Dimanche 21 mai (13h-20h)<br>
      </div>
      <p> Dis nous ce que tu aimerais faire pour nous aider :</p>
      <div id="tacheck">
        <input type="checkbox" name="tache[]" value="encadrement sportif"/> Encadrement sportif<br>
        <input type="checkbox" name="tache[]" value="logistique"/> Logistique<br>
        <input type="checkbox" name="tache[]" value="photo"/> Photo<br>
        <input type="checkbox" name="tache[]" value="vidéo"/> Vidéo<br>
        <input type="checkbox" name="tache[]" value="accueil/loges artistes"/> Accueil/Loges Artistes<br>
        <input type="checkbox" name="tache[]" value="cuisine"/> Cuisine<br>
        <input type="checkbox" name="tache[]" value="accueil/propreté"/> Accueil/Propreté<br>
      </div>
      <p id="choixtache">ATTENTION ! Ce choix reste indicatif, tu pourras éventuellement être placé là où l'organisation en a le plus besoin</p>
      <p>Choisis la taille de ton T-shirt Belleville en vrai 8 :</p>
      <div id="tbutton">
        <input type="radio" name="tsize" value="S" checked/> S<br>
        <input type="radio" name="tsize" value="M"/> M<br>
        <input type="radio" name="tsize" value="L"/> L<br>
        <input type="radio" name="tsize" value="XL"/> XL
      </div>
      <div>
        <label for="message">Quelque chose de plus à dire ?.. :</label><br>
        <textarea id="message" name="volmsg" cols="55" rows="10">Yoooooo !</textarea>
      </div>
      <input id="bsub"type="submit" value="INSCRIS TOI VITE, MERCI !"/>
    </form>
  </div>
</body>
</html>
