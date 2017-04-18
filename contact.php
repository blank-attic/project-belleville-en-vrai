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
  <div>
    <?php
    require('_menu.php');
    ?>
    <div id="errmess">

    </div>
  </div>
  <div class="txtbg">
    <h1>Pour plus d'information, contactez nous :</h1>
    <div id="contact-area">
      <form method="post" action="contacttraitement.php">
        <label for="Name">Nom:</label>
        <input type="text" name="Name" id="Name" placeholder="entrez votre nom"/>

        <label for="Email">Email:</label>
        <input type="text" name="Email" id="Email" placeholder="entrez votre e-mail"/>

        <label for="Message">Message:</label><br />
        <textarea name="Message" rows="20" cols="20" id="Message" placeholder="votre Message..."></textarea>

        <input type="submit" name="submit" value="Envoi" class="submit-button" />
      </form>
    </div>
  </div>
  <div class="space"></div>
  <div class="space"></div>
  <div>
    <!-- <h2><a class="contlink2" href="mailto:participation@bellevillenvrai.fr"><i class="fa fa-envelope" aria-hidden="true"></i>   participation@bellevillenvrai.fr</a></h2> -->
    <h2><a class="contlink" href="https://www.facebook.com/pg/Belleville-en-Vrai-167646066632163"><i class="fa fa-facebook-square" aria-hidden="true"></i>    facebook</a>
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a class="contlink" href="https://twitter.com/blvenvrai"><i class="fa fa-twitter-square" aria-hidden="true"></i>    twitter</a></h2>
    </div>

    <?php
    require('_footer.php');
    ?>
  </body>
  </html>
