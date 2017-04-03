<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html> -->
<div id="compte_a_rebours">
  <noscript>Debut de l'évènement le 19 Mai 2017.</noscript>
</div>
<script type="text/javascript">
function compte_a_rebours(){
  var compte_a_rebours = document.getElementById("compte_a_rebours");
  var date_actuelle = new Date();
  var date_evenement = new Date("May 19 18:00:00 2017");
  var total_secondes = (date_evenement - date_actuelle) / 1000;
  var prefixe = "Compte à rebours terminé dans ";

  if (total_secondes > 0){
    var jours = Math.floor(total_secondes / (60 * 60 * 24));
    var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
    var minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
    var secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));
  }
}
