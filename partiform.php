
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inscription Artiste</title>
  <link rel="stylesheet" href="assets/css/sportformstyle.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link href="assets/vendor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/menustyle.css" type="text/css">
  <link rel="stylesheet" href="asset/css/mqstyle.css" media="screen" type="text/css">
</head>
<body>
  <?php
  require('_menu.php');
   ?>
  <div class="formbase">
  <form action="partiform.php" method="POST">
    <p>Munissez vous de votre instrument de musique, de votre pinceau, ou tout simplement de votre voix pour venir vous exprimer ! Une scène ouverte est organisée sur la place Alphonse Allais le samedi 20 mai. Remplissez le formulaire suivant pour proposer votre projet :</p>
    <div class="divrow">
      <div>
        <label for="nom">ARTISTE, GROUPE :</label>
        <input type="text" id="nom" name="nom" placeholder="Nom de l'artiste/groupe " value="<?php echo isset($_POST["nom"]) ? $_POST["nom"] : "";?>"/>
      </div>
      <div>
        <label for="contact">TON CONTACT :</label>
        <input type="text" id="ndc" name="contact" placeholder="Nom du contact" value="<?php echo isset($_POST["contact"]) ? $_POST["contact"] : "";?>"/>
      </div>
    </div>
    <div class="divcol">
      <div>
        <label for="tel">SON NUMERO DE TEL :</label>
        <input type="tel  " id="tel" name="tel" placeholder="écris ici son numéro de téléphone" value="<?php echo isset($_POST["tel"]) ? $_POST["tel"] : "";?>"/>
      </div>
      <div>
        <label for="email">SON E-MAIL :</label>
        <input type="email" id="email" name="email" placeholder="écris ici son E-mail" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : "";?>"/>
      </div>
    <div>
    <label for="discipline">DISCIPLINE ARTISTIQUE :</label>
    <input type="text" id="discipline" name="discipline" placeholder="écris ici ta discipline" value="<?php echo isset($_POST["discipline"]) ? $_POST["discipline"] : "";?>"/>
  </div>
</div>
<div class="divcol">
  <div>
    <label for="participants">NOMBRE DE PARTICIPANTS :</label>
    <input type="text" id="participants" name="participants" placeholder="combien de participants" value="<?php echo isset($_POST["participants"]) ? $_POST["participants"] : "";?>"/>
  </div>
</div>
<div id="artprojet">
  <h3>Description du projet ...</h3>
  <textarea id="message" name="artprojet" rows="5"><?php echo (isset($_POST["artprojet"]) ? $_POST["artprojet"] : "...");?></textarea>
</div>
<div id="artprojet2">
  <h3>Avez vous déjà présenté ce projet. Si oui où et quand ?..</h3>
  <textarea id="message" name="artprojet2" rows="5"><?php echo (isset($_POST["artprojet2"]) ? $_POST["artprojet2"] : "...");?></textarea>
</div>
<div id="lien">
  <h3>Lien(s) vers vos projets (site, youtube, soundcloud...) :</h3>
  <textarea id="message" name="lien" rows="5"><?php echo (isset($_POST["lien"]) ? $_POST["lien"] : "...");?></textarea>
</div>
<div class="bsub">
  <input id="bsub" type="submit" value="CLIQUES ICI POUR T'INSCRIRE, MERCI !"/>
</div>
</form>
</div>
<?php
require('_footer.php');
 ?>
</body>
</html>
