<?php
// //connection bdd
require_once('_db.php');
// charge les classes
spl_autoload_register(function($blaze) {
 return require("class/" . $blaze . ".php");
});

//vérifie si il y a une requete post en cours
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  var_dump($_POST);
  $email = isset($_POST["email"]) ? $_POST["email"] : "";
  $nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
  $contact = isset($_POST["contact"]) ? $_POST["contact"] : "";
  $tel = isset($_POST["tel"]) ? $_POST["tel"] : "";
  $participants = isset($_POST["participants"]) ? $_POST["participants"] : "";
  $discipline = isset($_POST["discipline"]) ? $_POST["discipline"] : "";
  $artprojet = isset($_POST["artprojet"]) ? $_POST["artprojet"] : "";
  $artprojet2 = isset($_POST["artprojet2"]) ? $_POST["artprojet2"] : "";
  $lien = isset($_POST["lien"]) ? $_POST["lien"] : "";

  //creation d'un nouveau benevolearray();
  $parti = new Participation($nom, $contact, $tel, $email, $participants, $discipline, $artprojet, $artprojet2, $lien);
  //validation des data-inputs volunteer
  $errors = $parti->validate();
  echo "<ul id='error'>";
  // indication css : style='padding:2em;color:red;'
  if (count($errors) == 0) {
    $dao = new ParticipationDAO();
    //vérifie si le bénévole existe déja
    $checkparti = $dao->find($_DB, $parti->getNom(), $parti->getContact(), $parti->getParticipants());
    if ($checkparti["nom"] !== $parti->getNom()
    || $checkparti["contact"] !== $parti->getContact()
    || $checkparti["tel"] !== $parti->getTel()) {
      //save in db
      if($dao->save($_DB, $parti)) {
        echo "<h1 id='thxmsg'>MERCI ".$nom." ! JE TE SOUHAITE UN BON COURAGE SUR LA SCÈNE DE BELLEVILLE EN VRAI !</h1>";
        // no auth needed cause no connection from benevole

      }
    } else {
      echo "<li>Tu fais deja partie des artiste present !!</li>";
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
  <title>Inscription Artistes , Groupes </title>
  <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
</head>
<body>
  <div class="formbase">
  <form action="partiform.php" method="POST">
    <p>Remplis ce formulaire si tu est un Artiste ou un Groupe est que tu veux nous montrer ton art  </p>
    <div class="divrow">
      <div>
        <label for="nom">ARTISTE, GROUPE :</label>
        <input type="text" id="nom" name="nom" placeholder="Nom de l'artiste/groupe " value="<?php echo isset($_POST["nom"]) ? $_POST["nom"] : "";?>"/>
      </div>
      <div>
        <label for="contact">QUI EST TON RÉFÉRENT :</label>
        <input type="text" id="ndc" name="contact" placeholder="Nom du contact" value="<?php echo isset($_POST["contact"]) ? $_POST["contact"] : "";?>"/>
      </div>
    </div>
    <div class="divcol">
      <div>
        <label for="tel">TON NUMERO DE TEL :</label>
        <input type="tel  " id="tel" name="tel" placeholder="écris ici ton numéro de téléphone" value="<?php echo isset($_POST["tel"]) ? $_POST["tel"] : "";?>"/>
      </div>
      <div>
        <label for="email">TON E-MAIL :</label>
        <input type="email" id="email" name="email" placeholder="écris ici ton E-mail" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : "";?>"/>
      </div>
    <div>
    <label for="discipline">DISCIPLINE ARTISTIQUE:</label>
    <input type="text" id="discipline" name="discipline" placeholder="écris ici ta discipline" value="<?php echo isset($_POST["discipline"]) ? $_POST["discipline"] : "";?>"/>
  </div>
</div>
<div class="divcol">
  <div>
    <label for="participants">NOMBRE DE PARTICIPANTS :</label>
    <input type="text" id="participants" name="participants" placeholder="combien de personne participe" value="<?php echo isset($_POST["participants"]) ? $_POST["participants"] : "";?>"/>
  </div>
</div>
<div id="artprojet">
  <label for="message">Description du projet ..</label><br>
  <textarea id="message" name="artprojet" rows="5"><?php echo (isset($_POST["artprojet"]) ? $_POST["artprojet"] : "...");?></textarea>
</div>
<div id="artprojet2">
  <label for="message">Avez vous déjà présenté ce projet. Si oui où et quand ?..</label><br>
  <textarea id="message" name="artprojet2" rows="5"><?php echo (isset($_POST["artprojet2"]) ? $_POST["artprojet2"] : "...");?></textarea>
</div>
<div id="lien">
  <label for="message">Lien illustrant vos projets (site, youtube, soundcloud...)</label><br>
  <textarea id="message" name="lien" rows="5"><?php echo (isset($_POST["lien"]) ? $_POST["lien"] : "...");?></textarea>
</div>
<div class="bsub">
  <input id="bsub" type="submit" value="CLIQUES ICI POUR T'INSCRIRE, MERCI !"/>
</div>
</form>
</div>
</body>
</html>
