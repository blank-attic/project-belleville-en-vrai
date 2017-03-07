<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire pour bénévole</title>
  </head>
  <body>
    <form action="index.php" method="POST">
      <!-- faire des inputs de type différent -->
      <div class="text">
        <label for="name">NOM :</label>
        <input type="text" id="nom" name="name" placeholder="Entrez votre nom"/><br>
        <label for="firstname">PRENOM :</label>
        <input type="text" id="firstname" name="firstname" placeholder="Entrez votre prenom"/><br>
        <label for="mail :">MAIL :</label>
        <input type="mail" id="mail" name="mail" placeholder="Entrez votre mail"/><br>
        <label for="tel :">TEL :</label>
        <input type="tel" id="tel" name="tel" placeholder="Entrez votre numéro de tel"/><br>

      </div>
      <p> indiquez votre disponibilité : </p>
      <div class="dispocheck">
        <input type="checkbox" name="dispo" value="Vendredi18h21h"/> Vendredi 19 mai (18h-21h)<br>
        <input type="checkbox" name="dispo" value="Samedi8h13h"/> Samedi 20 mai(8h-13h)<br>
        <input type="checkbox" name="dispo" value="Samedi13h20h"/> Samedi 20 mai(13h-20h)<br>
        <input type="checkbox" name="dispo" value="Dimanche8h13h"/> Dimanche 21 mai(8h-13h)<br>
        <input type="checkbox" name="dispo" value="Dimanche13h20h"/> Dimanche 21 mai(13h-20h)<br>

      </div>
      <p> indiquez (la) ou (les) tache(s) que vous souhaitez faire : </p>
      <div class="dispocheck">
        <input type="checkbox" name="tache" value="encadrement sportif"/> Encadrement sportif<br>
        <input type="checkbox" name="tache" value="logistique"/> Logistique<br>
        <input type="checkbox" name="tache" value="photo"/> Photo<br>
        <input type="checkbox" name="tache" value="vidéo"/> Vidéo<br>
        <input type="checkbox" name="tache" value="loges/accueil artistes"/> Loges/Accueil artistes<br>
        <input type="checkbox" name="tache" value="cuisine"/> Cuisine<br>
        <input type="checkbox" name="tache" value="accueil/propreté"/> Accueil/Propreté<br>
      </div>
      <p>indiquez la taille pour votre t shirt Belleville en vrai :</p>
      <div class="tbutton">
        <input type="radio" name="tsize" value="S" checked/> S<br>
        <input type="radio" name="tsize" value="M"/> M<br>
        <input type="radio" name="tsize" value="L"/> L<br>
        <input type="radio" name="tsize" value="XL"/> XL
      </div>
      <div>
        <label for="message">Informations complémentaires :</label><br>
        <textarea id="message" cols="30" rows="10"></textarea>
      </div>
      <input type="submit" />
    </form>
  </body>
</html>
