<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Merci pour votre message !</title>
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/envoi.css">
    <link rel="icon" href="../medias/icon.png" type="image/png">
</head>

<body>
 <header>
    <?php 
        $titre = "";
        include 'header.php';
  ?>
  </header>

<?php
include "../connexionPDO.php";
 
if( isset($_POST["name"], $_POST["prenom"], $_POST["mail"], $_POST["objet"], $_POST["message"]) ){
  $sql = "INSERT INTO contact(nom, prenom, email, codePostal, sujet, message) VALUES (:nom, :prenom, :email, :codePostal, :sujet, :message)";
  // On prépare la requête avant l'envoi :
  $req = $db -> prepare($sql);
  // On exécute la requête en insérant la valeur transmise en POST
  $req -> execute(array('nom' => $_POST["name"], 
                        'prenom' => $_POST["prenom"], 
                        'email' => $_POST["mail"], 
                        'codePostal' => $_POST["codepostal"], 
                        'sujet' => $_POST["objet"], 
                        'message' => $_POST["message"]));

  $to  = 'mmifyw@gmail.com';

  $subject = 'Nouveau message sur le formulaire de contact MMI FYW !';

  $message = '
  <html>
  <head>
  <title>Nouveau messsage MMI FYW</title>
  </head>
  <body>
    <h3>Nouveau message reçu</h3>
    <ul>
      <li>date : '.date("Y-m-d H:i:s").'</li>
      <li>prénom : '.$_POST["prenom"].'</li>
      <li>nom : '.$_POST["name"].'</li>
      <li>adresse e-mail : '.$_POST["mail"].'</li>
      <li>code postal : '.$_POST["codepostal"].'</li>
      <li>objet : '.$_POST["objet"].'</li>
    </ul>
    <p>'.$_POST['message'].'</p>
  </body>
  </html>
  ';

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  $headers .= 'From: crexharr@etud.u-pem.fr' . "\r\n";

  mail($to,$subject,$message,$headers);
  $req = null;
}
?>

  <section>
      <img src="../medias/logo.svg" alt="">
      <h2>Merci pour votre message !</h2>
      <p>L'équipe MMI Find Your Way le prendra en charge dès que possible.</p>
      <a href="../index.php">ACCUEIL</a>
  </section>
     
</body>
</html>
