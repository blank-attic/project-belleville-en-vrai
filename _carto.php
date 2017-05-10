<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
  </head>
  <body>
     <div id="mapbev"></div>
  </body>
  <script type="text/javascript">
    var mymap = L.map('mapbev').setView([48.8723, 2.380], 16);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {

      attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors | markers by LAWD'

 }).addTo(mymap);

 var blackIcon = new L.Icon({
  iconUrl: 'assets/images/marker-icon-2x-black.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

  L.marker([48.8714538,2.3788977], {icon: blackIcon}).addTo(mymap)
  .bindPopup('<h3>Piscine A.Nakache</h3>Vendredi 19 Mai<br/>18h00: Epreuve de Natation<br/>Métro: Belleville')
  .openPopup();
  L.marker([48.871489,2.378383], {icon: blackIcon}).addTo(mymap)
  .bindPopup('<h3>Vendredi 19 Mai 19h00:<br/> SURPRISES !!!</h3>Métro: Belleville');
  L.marker([48.8710678,2.3847051], {icon: blackIcon}).addTo(mymap)
  .bindPopup('<h3>Parc de Belleville</h3>Samedi 20 Mai<br/>09h30: Epreuves du Cross <br/>Dimanche 21 Mai<br/>14h00-17h00 : Animation Sportive par Tatane Football<br/>Métro: Belleville, Couronnes, Pyrénées');
  L.marker([48.87064,2.382127], {icon: blackIcon}).addTo(mymap)
  .bindPopup('<h3>Place Alphonse Allais</h3>Samedi 20 Mai<br/>10h00: Chantier participatif<br/>15h00 : Débats<br/>18h00 : Scène Ouverte<br/>Métro: Belleville, Couronnes');
  L.marker([48.870012, 2.376315], {icon: blackIcon}).addTo(mymap)
  .bindPopup('<h3>Gymnase Orillon</h3>Dimanche 21 Mai<br/>10h00: Finales Basket<br/>Métro: Belleville');
  L.marker([48.8753076,2.3795783], {icon: blackIcon}).addTo(mymap)
  .bindPopup('<h3>TEP Jandelle</h3>Samedi 20 Mai<br/>12h00-19h00: Qualifications Foot<br/><br/>Dimanche 21 Mai <br/>12h00: Finales Foot<br/>14h00: Match amical football féminin <br/><br/>Métro: Belleville');
  L.marker([48.8715766,2.385230], {icon: blackIcon}).addTo(mymap)
  .bindPopup('<h3>Belvédère du Parc de Belleville</h3>Dimanche 21 Mai<br/>Ateliers participatifs<br/>Strataj’m : atelier de convivialité et de jeux pour petits et grands<br/>Curry Vavart – Villa Belleville : atelier de construction participatif de passes-têtes et d’assises<br/>Catharsis : Cabine d’expression vidéo<br/>Point temporaire d’accès au droit<br/>Espaces de restauration<br/>Métro: Pyrénées');
  L.marker([48.871687,2.384900], {icon: blackIcon}).addTo(mymap)
  .bindPopup('<h3>Amphithéatre du Parc de Belleville</h3>Dimanche 21 Mai<br/>15h00: JEUX DE LA JONGLE – Spectacle participatif de jonglerie<br/>16h00 : OUVERTURE – Performances et spectacles de danse<br/>17h00: CONCERTS ET REMISE DES PRIX<br/><h4>BLVL MAFIA | MAKADERO | 19 RESEAUX | CHILLA | LINO</h4><br/>Métro: Pyrénées');
  L.marker([48.869659,2.378683], {icon: blackIcon}).addTo(mymap)
  .bindPopup('<h3>Gymnase Fontaine au Roi</h3>Samedi 20 Mai<br/>11h00-19h00: Qualifications Basket | Ping Pong | Foot<br/>100 rue de la Fontaine au roi | Métro: Belleville');
  L.marker([48.870152,2.385056], {icon: blackIcon}).addTo(mymap)
  .bindPopup('<h3>Salle polyvalente Hervé Rozental</h3>Samedi 20 Mai<br/>11h00-19h00: Qualifications Basket | Ping Pong | Foot<br/>64 rue des Couronnes | Métro: Couronnes');


  </script>
</html>
