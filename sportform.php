<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inscription Participants</title>
  <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
</head>
<body>
  <div class="formbase" id="spform">
    <form class="" action="sportform.php" method="post">
      <h2>TA CATEGORIE :</h2>
      <p>Tu es dans quelle catégorie ?</p>
      <div class="radiobutt">
        Petit(e)s<input type="radio" name="categorie" value="Petit(e)s">
        Moyen(ne)s<input type="radio" name="categorie" value="Moyen(ne)s">
        Grands(e)s<input type="radio" name="categorie" value="Grands(e)s">
      </div>
      <h2>TON QUARTIER :</h2>
      <p>Quel est ton Quartier ?</p>
      <div class="check">
        <input type="radio" name="quartier[]" value="rebeval">REBEVAL<br>
        <input type="radio" name="quartier[]" value="piat">PIAT<br>
        <input type="radio" name="quartier[]" value="ramponeau">RAMPONEAU<br>
        <input type="radio" name="quartier[]" value="orillon">ORILLON<br>
      </div>
      <h2>VOTRE EQUIPE :</h2>
      <p>Quel est le nom de votre équipe ?
        <span id="tnwarnin">(pas de Zoo ou de Zou dans les noms d'équipe !!)</span>
      </p>
      <div class="teamname">
        <label for="teamname">Notre équipe c'est :</label>
        <input type="text" id="teamname" name="nom_equipe" placeholder="écris ici le nom de votre équipe " size="50">
      </div>
      <p>Qui est dans votre équipe ?</p>
      <label for="j1">Quel est le prénom du JOUEUR 1 (Capitaine) ?</label>
      <input type="text" id="j1" name="nom_j1cap" placeholder="CAPITAINE"><br>
      <label for="telj1">Quel est son numéro de Téléphone :</label>
      <input type="tel" id="telj1" name="tel_j1" value="" size="10"><br>
      <label for="datej1">Quel est sa date de Naissance :</label>
      <input type="date" id="datej1" name="date_j1" placeholder="JJ/MM/AAAA" ><br>

      <label for="j2">Quel est le prénom du JOUEUR 2 ?</label>
      <input type="text" id="j2" name="nom_j2" placeholder="JOUEUR 2"><br>
      <label for="telj2">Quel est son numéro de Téléphone :</label>
      <input type="tel" id="telj2" name="tel_j2" value="" size="10"><br>
      <label for="datej2">Quel est sa date de Naissance :</label>
      <input type="date" id="datej2" name="date_j2" placeholder="JJ/MM/AAAA" ><br>

      <label for="j3">Quel est le prénom du JOUEUR 3 ?</label>
      <input type="text" id="j3" name="nom_j3" placeholder="JOUEUR 3"><br>
      <label for="telj3">Quel est son numéro de Téléphone :</label>
      <input type="tel" id="telj3" name="tel_j3" value="" size="10"><br>
      <label for="datej3">Quel est sa date de Naissance :</label>
      <input type="date" id="datej3" name="date_j3" placeholder="JJ/MM/AAAA" ><br>

      <label for="j4">Quel est le prénom du JOUEUR 4 ?</label>
      <input type="text" id="j4" name="nom_j4" placeholder="JOUEUR 4"><br>
      <label for="telj4">Quel est son numéro de Téléphone :</label>
      <input type="tel" id="telj4" name="tel_j4" value="" size="10"><br>
      <label for="datej4">Quel est sa date de Naissance :</label>
      <input type="date" id="datej4" name="date_j4" placeholder="JJ/MM/AAAA" ><br>

      <label for="j5">Quel est le prénom du JOUEUR 5 ?</label>
      <input type="text" id="j5" name="nom_j5" placeholder="JOUEUR 5"><br>
      <label for="telj5">Quel est son numéro de Téléphone :</label>
      <input type="tel" id="telj5" name="tel_j5" value="" size="10"><br>
      <label for="datej5">Quel est sa date de Naissance :</label>
      <input type="date" id="datej5" name="date_j5" placeholder="JJ/MM/AAAA" ><br>

      <label for="j6">Quel est le prénom du JOUEUR 6 ?</label>
      <input type="text" id="j6" name="nom_j6" placeholder="JOUEUR 6"><br>
      <label for="telj6">Quel est son numéro de Téléphone :</label>
      <input type="tel" id="telj6" name="tel_j6" value="" size="10"><br>
      <label for="datej6">Quel est sa date de Naissance :</label>
      <input type="date" id="datej6" name="date_j6" placeholder="JJ/MM/AAAA" ><br>

      <label for="j7">Quel est le prénom du JOUEUR 7 ?</label>
      <input type="text" id="j7" name="nom_j7" placeholder="JOUEUR 7"><br>
      <label for="telj7">Quel est son numéro de Téléphone :</label>
      <input type="tel" id="telj7" name="tel_j7" value="" size="10"><br>
      <label for="datej7">Quel est sa date de Naissance :</label>
      <input type="date" id="datej7" name="date_j7" placeholder="JJ/MM/AAAA" ><br>

      <label for="j8">Quel est le prénom du JOUEUR 8 ?</label>
      <input type="text" id="j8" name="nom_j8" placeholder="JOUEUR 8"><br>
      <label for="telj8">Quel est son numéro de Téléphone :</label>
      <input type="tel" id="telj8" name="tel_j8" value="" size="10"><br>
      <label for="datej8">Quel est sa date de Naissance :</label>
      <input type="date" id="datej8" name="date_j8" placeholder="JJ/MM/AAAA" ><br>
    </form>
  </div>

</body>
</html>
