<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ce site est une présentation du Festival du Quartier BELLEVILLE, Belleville En Vrai"/>
  <meta name="author" content="Laurent Abemango alias LAWD / Badis Nakhli / Abdoulaye Ndao"/>
  <title>BELLEVILLE EN VRAI</title>
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link href="assets/vendor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
  <link rel="stylesheet" href="assets/css/menustyle.css" type="text/css">
  <link rel="stylesheet" href="assets/css/mqstyle.css" media="screen" type="text/css">
</head>
<body>
  <?php
  require('_menu.php');
  ?>
  <header>
    <img src="assets/images/bev_prog.png" alt="programme image by LAWD" class="vidlogo">
  </header>
  <div class="prog">
    <h1>VENDREDI 19 MAI</h1>
    <div class="progtxt">
      <h2><span class="orange">SPORT</span></h2>
      <h2><span class="yello">18h :</span> Epreuve de Natation - Piscine Alfred Nakache</h2>
      <h3>4-12 Rue Dénoyez | Métro : Belleville</h3>

      <h2><span class="yello">19h :</span> SURPRISES !!!</h2>
      <h3>Rue Dénoyez | Métro : Belleville</h3>
    </div>
    <div class="space"></div>
    <div class="progtxt">
    <h1>SAMEDI 20 MAI</h1>
    <h2><span class="orange">SPORT</span></h2>
      <h2><span class="yello">9h30 :</span> Epreuve de Cross</h2>
      <h3>Parc de Belleville | Métro : Belleville, Couronnes, Pyrénées</h3>
      <h2><span class="yello">13h - 20h :</span> Qualifications :</h2>
      <h3>foot, basket, tennis de table et quizz de culture générale</h3>
      <div class="space"></div>
      <h2><span class="orange">CULTURE | Place Alphonse Allais</span></h2>
      <h2><span class="yello">10h :</span> Chantier Participatif :</h2>
      <h2><span class="yello">15h :</span> Débats</h2>
      <h2><span class="yello">18h :</span> Scène Ouverte via <a href="partiform.php"class="contlink">- Appel à Participation -</a></h2>
      <h3>Métro : Belleville, Couronnes</h3>
    </div>
    <div class="space"></div>
    <h1>DIMANCHE 21 MAI</h1>
    <div class="progtxt">
      <h2><span class="orange">SPORT | TEP Jandelle</span></h2>
      <h2><span class="yello">12h :</span> Finales Foot</h2>
      <h2><span class="yello">14h :</span> Match amical football féminin avec Les Dégommeuses.</h2>
      <h3>15 cité Jandelle | Métro : Belleville</h3>
    </div>
    <div class="space"></div>

    <h2 class="yello">Ateliers Participatifs | Au Belvédère du Parc de Belleville</h2>
    <div class="progtxt">
      <h2>Strataj’m : atelier de convivialité et de jeux pour petits et grands</h2>
      <h2>Curry Vavart – Villa Belleville : atelier de construction participatif de passes-têtes et d’assises</h2>
      <h2>Catharsis : Cabine d’expression vidéo</h2>
      <h2>Tatane Football - Animation sportive sur les grandes pelouses du parc à partir de 14h.</h2>
      <h2>Point temporaire d’accès au droit</h2>
      <h3>Rue Piat | Métro : Pyrénées</h3>
    </div>
    <div class="space"></div>
    <h2 class="yello">Concerts & animations | A l'Amphithéâtre du Parc de Belleville </h2>
    <div class="progtxt">
      <h2><span class="yello">15h :</span> JEUX DE LA JONGLE – Spectacle participatif de jonglerie</h2>
      <h2><span class="yello">16h :</span> OUVERTURE – Performances et spectacles de danse</h2>
      <h2><span class="yello">17h :</span> CONCERTS ET REMISE DES PRIX</h2>
      <h2>BLVL MAFIA - MAKADERO – 19 RESEAUX – CHILLA – LINO</h2>
      <h3>Rue Piat | Métro : Pyrénées</h3>
    </div>
  </div>
  <div class="space"></div>
  <h1>Retrouvez ces évènements sur la carte ci dessous :</h1>
</div>
<?php
require('_carto.php');
?>

<?php
require('_footer.php');
?>
</body>
</html>
