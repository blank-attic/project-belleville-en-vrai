<?php
require_once('_db.php');
if (!isset($_GET["firstname"])) {
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/ddtstyle.css">
  <title>MERCI !!!</title>
</head>
<body>
  <div class="txtbg">
    <?php
    echo "<h1>  Je te remercie pour ta contribution, ".$_GET["firstname"]." ,pour toute autre information tu peux toujours nous contacter sur : participation@bellevillenvrai.fr </h1>";
    ?>
  </div>
</body>
</html>
