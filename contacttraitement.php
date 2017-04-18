<?php
session_start();
  $EmailTo = "majorgrafismz@gmail.com";
  $Subject = "belleville en vrai";
  $Name = isset($_POST["Name"])? htmlspecialchars($_POST["Name"]) : "";
  $Email = isset($_POST["Email"])? htmlspecialchars($_POST["Email"]) : "";
  $Message = isset($_POST["Message"])? htmlspecialchars($_POST["Message"]) : "";
  if ($_SERVER["REQUEST_METHOD"]== "POST"){
  if (empty($Name) && empty($Email) && empty($Message)){
    echo "<h3 class='errmess'>Tous les champs doivent être remplis..!</h3>";
  }
  elseif (empty($Name)){
    echo "<h3 class='errmess'>Entrer votre nom...</h3>";
  }
  elseif (empty($Email)){
    echo "<h3 class='errmess'>Entrer an e-mail...</h3>";
  }
  elseif (empty($Message)){
    echo "<h3 class='errmess'>Quel est votre message ?</h3>";
  }else {
    $Body = "";
    $Body .= "Nom: ";
    $Body .= $Name;
    $Body .= "\n";
    $Body .= "Email: ";
    $Body .= $Email;
    $Body .= "\n";
    $Body .= "Message: ";
    $Body .= $Message;
    $Body .= "\n";
    // send email
    $success = mail($EmailTo, $Subject, $Body);
    // redirect to success page
    if ($success){
      header('Location: contactthanks.php');
    }
  }
}
?>
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

</body>
</html>
