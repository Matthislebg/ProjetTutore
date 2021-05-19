
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Contact - </title>
  <link rel="stylesheet" href="../styles/envoi.css">
</head>
<body>
 
<?php
 include "../connexionPDO.php";
// pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr
 
if(isset($_POST["name"]) & isset($_POST["prenom"]) & isset($_POST["mail"]) & isset($_POST["codepostal"]) & isset($_POST["objet"]) & isset($_POST["envoyer"])){
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
  // $req = null;
  // On affiche l'adresse inscrite en évitant une injection de code JS
  echo "<h1>Merci pour votre message !</h1>";
}
?>
 
  
  <a href="../index.php">Retour à l'accueil</a>
</body>
</html>
