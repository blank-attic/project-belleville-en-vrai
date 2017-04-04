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
        <div>
          <label for="cpt">Petit(e)s</label>
          <input id="cpt" type="radio" name="categorie" value="Petit">
        </div>
        <div>
          <label for="cm">Moyen(ne)s</label>
          <input id="cm" type="radio" name="categorie" value="Moyen">
        </div>
        <div>
          <label for="cgd">Grand(e)s</label>
          <input type="radio" name="categorie" value="Grand">
        </div>
      </div>
      <h2>TON QUARTIER :</h2>
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
      <p>Quel Grand de ton Quartier qui participe à l'organisation de Belleville En Vrai 8 ?</p>
      <div class="divcol">
        <div>
          <label for="ref">Notre référent est :</label>
          <input id="ref" type="text" name="refname" value="" placeholder="Prenom du Référent">
        </div>
      </div><br/><br/>
      <h2>VOTRE EQUIPE :</h2>
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
          <input type="text" id="j1" name="nom_j1cap" placeholder="CAPITAINE">
        </div>
        <div>
          <label for="telj1">Quel est son numéro de Téléphone :</label>
          <input type="tel" id="telj1" name="tel_j1" value="">
        </div>
        <div>
          <label for="datej1">Quel est sa date de Naissance :</label>
          <input type="date" id="datej1" name="date_j1" placeholder="JJ/MM/AAAA">
        </div><br/>

        <div>
          <label for="j2">Quel est le prénom du JOUEUR 2 ?</label>
          <input type="text" id="j2" name="nom_j2" placeholder="JOUEUR 2">
        </div>
        <div>
          <label for="telj2">Quel est son numéro de Téléphone :</label>
          <input type="tel" id="telj2" name="tel_j2" value="">
        </div>
        <div>
          <label for="datej2">Quel est sa date de Naissance :</label>
          <input type="date" id="datej2" name="date_j2" placeholder="JJ/MM/AAAA">
        </div><br/>

        <div>
          <label for="j3">Quel est le prénom du JOUEUR 3 ?</label>
          <input type="text" id="j3" name="nom_j3" placeholder="JOUEUR 3">
        </div>
        <div>
          <label for="telj3">Quel est son numéro de Téléphone :</label>
          <input type="tel" id="telj3" name="tel_j3" value="">
        </div>
        <div>
          <label for="datej3">Quel est sa date de Naissance :</label>
          <input type="date" id="datej3" name="date_j3" placeholder="JJ/MM/AAAA">
        </div><br/>

        <div>
          <label for="j4">Quel est le prénom du JOUEUR 4 ?</label>
          <input type="text" id="j4" name="nom_j4" placeholder="JOUEUR 4">
        </div>
        <div>
          <label for="telj4">Quel est son numéro de Téléphone :</label>
          <input type="tel" id="telj4" name="tel_j4" value="">
        </div>
        <div>
          <label for="datej4">Quel est sa date de Naissance :</label>
          <input type="date" id="datej4" name="date_j4" placeholder="JJ/MM/AAAA">
        </div><br/>

        <div>
          <label for="j5">Quel est le prénom du JOUEUR 5 ?</label>
          <input type="text" id="j5" name="nom_j5" placeholder="JOUEUR 5">
        </div>
        <div>
          <label for="telj5">Quel est son numéro de Téléphone :</label>
          <input type="tel" id="telj5" name="tel_j5" value="">
        </div>
        <div>
          <label for="datej5">Quel est sa date de Naissance :</label>
          <input type="date" id="datej5" name="date_j5" placeholder="JJ/MM/AAAA">
        </div><br/>

        <div>
          <label for="j6">Quel est le prénom du JOUEUR 6 ?</label>
          <input type="text" id="j6" name="nom_j6" placeholder="JOUEUR 6">
        </div>
        <div>
          <label for="telj6">Quel est son numéro de Téléphone :</label>
          <input type="tel" id="telj6" name="tel_j6" value="">
        </div>
        <div>
          <label for="datej6">Quel est sa date de Naissance :</label>
          <input type="date" id="datej6" name="date_j6" placeholder="JJ/MM/AAAA">
        </div><br/>

        <div>
          <label for="j7">Quel est le prénom du JOUEUR 7 ?</label>
          <input type="text" id="j7" name="nom_j7" placeholder="JOUEUR 7">
        </div>
        <div>
          <label for="telj7">Quel est son numéro de Téléphone :</label>
          <input type="tel" id="telj7" name="tel_j7" value="">
        </div>
        <div>
          <label for="datej7">Quel est sa date de Naissance :</label>
          <input type="date" id="datej7" name="date_j7" placeholder="JJ/MM/AAAA">
        </div><br/>

        <div>
          <label for="j8">Quel est le prénom du JOUEUR 8 ?</label>
          <input type="text" id="j8" name="nom_j8" placeholder="JOUEUR 8">
        </div>
        <div>
          <label for="telj8">Quel est son numéro de Téléphone :</label>
          <input type="tel" id="telj8" name="tel_j8" value="">
        </div>
        <div>
          <label for="datej8">Quel est sa date de Naissance :</label>
          <input type="date" id="datej8" name="date_j8" placeholder="JJ/MM/AAAA">
        </div><br/>
      </div>
      <div>
        <input id="spsub" type="submit" name="sportsub" value="CLIQUES ICI POUR INSCRIRE VOTRE EQUIPE">
      </div>

    </form>
  </div>

</body>
</html>
