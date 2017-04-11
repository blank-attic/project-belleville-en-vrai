<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
  </head>
  <body>
     <div id="mapbev"></div>
  </body>
  <script type="text/javascript">
    var mymap = L.map('mapbev').setView([48.8723, 2.380], 16);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
 }).addTo(mymap);

  L.marker([48.8714538,2.3788977]).addTo(mymap)
  .bindPopup('Vendredi 19 Mai<h3>Piscine A.Nakache</h3>18h00: Epreuves de Natation<br/>Métro: Belleville')
  .openPopup();
  L.marker([48.871489,2.378383]).addTo(mymap)
  .bindPopup('Vendredi 19 Mai<h3>19h00: BLOCK PARTY !!!</h3>Métro: Belleville');
  L.marker([48.8710678,2.3847051]).addTo(mymap)
  .bindPopup('Samedi 20 Mai<h3>Parc de Belleville</h3>09h30: Epreuves du Cross <br/>Dimanche 21 Mai<br/>14h00-17h00 : Animation foot par Tatane<br/>Métro: Belleville, Couronnes, Pyrénées');
  L.marker([48.87064,2.382127]).addTo(mymap)
  .bindPopup('Samedi 20 Mai<h3>Place Alphonse Allais</h3>09h00: Chantier participatif<br/>12h00: Scène d’expression libre<br/>15h00 : Conférence gesticulée<br/>16h30 : Goûter partagé – Vélo Smoothy Mixer<br/>18h : Scène Artistes Quartier<br/>Métro: Belleville, Couronnes');
  L.marker([48.870012, 2.376315]).addTo(mymap)
  .bindPopup('Dimanche 21 Mai<h3>Gymnase Orillon</h3>10h00: Finales Basket<br/>Métro: Belleville');
  L.marker([48.8754096,2.3779683]).addTo(mymap)
  .bindPopup('Dimanche 21 Mai<h3>TEP Jandelle</h3>12h00: Finales Foot<br/>Métro: Belleville');
  L.marker([48.8715766,2.385567]).addTo(mymap)
  .bindPopup('Dimanche 21 Mai<h3>Belvédère du Parc de Belleville</h3>Ateliers participatifs<br/>Expositions<br/>Métro: Pyrénées');
  L.marker([48.871587,2.385070]).addTo(mymap)
  .bindPopup('Dimanche 21 Mai<h3>Amphithéatre du Parc de Belleville</h3>16h00 : Spectacle Danse Contemporaine<br/>17h00-20h00 : Concerts<br/>20h00 : Remise des Trophées<br/>Métro: Pyrénées');


  </script>
</html>
