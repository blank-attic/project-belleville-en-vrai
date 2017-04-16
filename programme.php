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
      <h2><span class="yello">18h :</span> Epreuve de Natation - Piscine Alfred Nakache</h2>
      <h3>4-12 Rue Dénoyez | Métro : Belleville</h3>

      <h2><span class="yello">19h :</span> SURPRISES !!!</h2>
      <h3>Rue Dénoyez | Métro : Belleville</h3>
    </div>
    <div class="space"></div>
    <h1>SAMEDI 20 MAI</h1>
    <div class="progtxt">
      <h2><span class="yello">9h30 :</span> Epreuve de Cross</h2>
      <h3>Parc de Belleville | Métro : Belleville, Couronnes, Pyrénées</h3>
      <h2><span class="yello">13h - 20h :</span> Qualifications :</h2>
      <h3>foot, basket, tennis de table et quizz de culture générale</h3>
      <div class="space"></div>
      <h2><span class="yello">9h :</span> Chantier Participatif :</h2>
      <h3>Construction collective de la scénographie</h3>
      <h2><span class="yello">12h :</span> Scène d’Expression Libre</h2>
      <h2><span class="yello">14h :</span> Animation Sportive</h2>
      <h2><span class="yello">17h :</span> Conférence gesticulée / Débat</h2>
      <h2><span class="yello">18h - 21h :</span> Scène quartier : scène amateur ouverte via <a href="partiform.php"class="contlink">Appel à Participation</a></h2>
      <h2>Toute la journée, retransmission Live des Epreuves et des Scores, point temporaire d’accès au Droit</h2>
      <h3>Place Alphonse Allais | Métro : Belleville, Couronnes</h3>
    </div>
    <div class="space"></div>
    <h1>DIMANCHE 21 MAI</h1>
    <div class="progtxt">
      <h2><span class="yello">10h :</span> Finales Basket - Gymnase Maurice Berlémont</h2>
      <h3>22 Rue de l'Orillon | Métro : Belleville</h3>

      <h2><span class="yello">12h :</span> Finales Foot - TEP Jandelle</h2>
      <h3>15 cité Jandelle | Métro : Belleville</h3>

      <h2><span class="yello">15h30 - 16h00 :</span> Batucada - Déambulation</h2>
      <h3>du TEP Jandelle à l’Amphithéâtre du Parc de Belleville</h3>
    </div>
    <div class="space"></div>

    <h2 class="yello">Au Belvédère du Parc de Belleville</h2>
    <div class="progtxt">
      <h2>Village Associatif – Ateliers Participatifs</h2>
      <h3>Rue Piat | Métro : Pyrénées</h3>
    </div>
    <div class="space"></div>
    <h2 class="yello">A l' Amphithéâtre du Parc de Belleville </h2>
    <div class="progtxt">
      <h2><span class="yello">15h :</span> Jeux de la Jongle – Spectacle participatif</h2>
      <h2><span class="yello">16h :</span> Démonstration arts martiaux & Démonstration Double Dutch</h2>
      <h2><span class="yello">16h30 :</span> Juste Debout – Spectacle de danse</h2>
      <h2><span class="yello">17h :</span> 1ère partie – artistes confirmés du Quartier</h2>
      <h2><span class="yello">18h :</span> Concert de hip-hop</h2>
      <h2><span class="yello">19h :</span> Concert de hip-hop</h2>
      <h2><span class="yello">20h :</span> Remise des trophées par les parrains et marraines et clôture de l’événement</h2>

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
