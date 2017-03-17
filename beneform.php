<?php
// //connection bdd
require_once('_db.php');
// charge les classes
spl_autoload_register(function($blaze) {
 return require("class/" . $blaze . ".php");
});

//vérifie si il y a une requete post en cours
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $email = isset($_POST["email"]) ? $_POST["email"] : "";
 $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
 $name = isset($_POST["name"]) ? $_POST["name"] : "";
 $tel = isset($_POST["tel"]) ? $_POST["tel"] : "";
 $dispo = isset($_POST["dispo"]) ? $_POST["dispo"] : array();
 $tache = isset($_POST["tache"]) ? $_POST["tache"] : array();
 $tsize = isset($_POST["tsize"]) ? $_POST["tsize"] : "";
 $message = isset($_POST["volmsg"]) ? $_POST["volmsg"] : "";

 //creation d'un nouveau benevole
 $volunteer = new Volunteer($name, $firstname, $tel, $email, $dispo, $tache, $tsize, $message);
 //validation des data-inputs volunteer
 $errors = $volunteer->validate();
 echo "<ul id='error'>";
 // indication css : style='padding:2em;color:red;'
 if (count($errors) == 0) {
   $dao = new VolunteerDAO();
   //vérifie si le bénévole existe déja
   $checkvolunteer = $dao->find($_DB, $volunteer->getFirstname(), $volunteer->getName(), $volunteer->getTel());
   if ($checkvolunteer["prenom"] !== $volunteer->getFirstname()
   || $checkvolunteer["nom"] !== $volunteer->getName()
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
  <div class="formbase" id="bform">
    <form action="beneform.php" method="POST">
      <p>Remplis ce formulaire pour t'inscrire afin que l'on sache Qui, Quand et Quoi pour pouvoir organiser le Comment !</p>
      <div class="divrow">
        <div>
          <label for="firstname">TON PRENOM :</label>
          <input type="text" id="firstname" name="firstname" placeholder="écris ici ton prenom" value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : "";?>"/>
        </div>
        <div>
          <label for="nom">TON NOM :</label>
          <input type="text" id="nom" name="name" placeholder="écris ici ton nom" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : "";?>"/>
        </div>
      </div>
      <div class="divcol">
        <div>
          <label for="tel">TON NUMERO DE TEL :</label>
          <input type="tel" id="tel" name="tel" placeholder="écris ici ton numéro de téléphone" value="<?php echo isset($_POST["tel"]) ? $_POST["tel"] : "";?>"/>
        </div>
        <div>
          <label for="mail">TON E-MAIL :</label>
          <input type="email" id="mail" name="email" placeholder="écris ici ton E-mail" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : "";?>"/>
        </div>
      </div>
      <p> Choisis quand tu peux nous aider :</p>
      <div class="check" id="dispocheck">
        <div>
          <input id="ven" type="checkbox" name="dispo[]" value="1" "<?php echo (isset($_POST["dispo"]) && in_array("1", $_POST["dispo"])) ? "checked" : "";?>"/>
          <label for="ven">Vendredi 19 mai (18h-21h)</label>
        </div>
        <div>
          <input id="sam" type="checkbox" name="dispo[]" value="2"  "<?php echo (isset($_POST["dispo"]) && in_array("2", $_POST["dispo"])) ? "checked" : "";?>"/>
          <label for="sam">Samedi 20 mai (8h-13h)</label>
        </div>
        <div>
          <input id="spm" type="checkbox" name="dispo[]" value="4"  "<?php echo (isset($_POST["dispo"]) && in_array("4", $_POST["dispo"])) ? "checked" : "";?>"/>
          <label for="spm">Samedi 20 mai (13h-20h)</label>
        </div>
        <div>
          <input id="dam" type="checkbox" name="dispo[]" value="8"  "<?php echo (isset($_POST["dispo"]) && in_array("8", $_POST["dispo"])) ? "checked" : "";?>"/>
          <label for="dam">Dimanche 21 mai (8h-13h)</label>
        </div>
        <div>
          <input id="dpm" type="checkbox" name="dispo[]" value="16"  "<?php echo (isset($_POST["dispo"]) && in_array("16", $_POST["dispo"])) ? "checked" : "";?>"/>
          <label for="dpm">Dimanche 21 mai (13h-20h)</label>
        </div>
      </div>
      <p> Dis nous ce que tu aimerais faire pour nous aider <span class="yel">*</span> :</p>
      <div class="check" id="tacheck">
        <div>
          <input id="es" type="checkbox" name="tache[]" value="1"  "<?php echo (isset($_POST["tache"]) && in_array("1", $_POST["tache"])) ? "checked" : "";?>"/>
          <label for="es">Encadrement Sportif</label>
        </div>
        <div>
          <input id="logis" type="checkbox" name="tache[]" value="2" "<?php echo (isset($_POST["tache"]) && in_array("2", $_POST["tache"])) ? "checked" : "";?>"/>
          <label for="logis">Logistique</label>
        </div>
        <div>
          <input id="photo" type="checkbox" name="tache[]" value="4" "<?php echo (isset($_POST["tache"]) && in_array("4", $_POST["tache"])) ? "checked" : "";?>"/>
          <label for="photo">Photo</label>
        </div>
        <div>
          <input id="video" type="checkbox" name="tache[]" value="8" "<?php echo (isset($_POST["tache"]) && in_array("8", $_POST["tache"])) ? "checked" : "";?>"/>
          <label for="video">Vidéo</label>
        </div>
        <div>
          <input id="acloge" type="checkbox" name="tache[]" value="16" "<?php echo (isset($_POST["tache"]) && in_array("16", $_POST["tache"])) ? "checked" : "";?>"/>
          <label for="acloge">Accueil/Loges Artistes</label>
        </div>
        <div>
          <input id="cuisine" type="checkbox" name="tache[]" value="32" "<?php echo (isset($_POST["tache"]) && in_array("32", $_POST["tache"])) ? "checked" : "";?>"/>
          <label for="cuisine">Cuisine</label>
        </div>
        <div>
          <input id="acprop" type="checkbox" name="tache[]" value="64" "<?php echo (isset($_POST["tache"]) && in_array("64", $_POST["tache"])) ? "checked" : "";?>"/>
          <label for="acprop">Accueil/Propreté</label>
        </div>
      </div>
      <p id="choixtache">* Ce choix reste indicatif, tu pourras éventuellement être placé là où l'organisation en a le plus besoin</p>
      <p>Choisis la taille de ton T-shirt Belleville en vrai 8 :</p>
      <div class="radiobutt">
        <div>
          <label for="s">S</label>
          <input id="s" type="radio" name="tsize" value="S" checked/>
        </div>
        <div>
          <label for="m">M</label>
          <input id="m" type="radio" name="tsize" value="M"/>
        </div>
        <div>
          <label for="l">L</label>
          <input id="l" type="radio" name="tsize" value="L"/>
        </div>
        <div>
          <label for="xl">XL</label>
          <input id="xl" type="radio" name="tsize" value="XL"/>
        </div>
      </div>
      <div id="volmsg">
        <label for="message">As-tu quelques mots de plus à ajouter ?..</label><br>
        <textarea id="message" name="volmsg" rows="5">...</textarea>
      </div>
      <div class="bsub">
        <input id="bsub" type="submit" value="CLIQUES ICI POUR T'INSCRIRE, MERCI !"/>
      </div>
    </form>
  </div>
</body>
</html>
