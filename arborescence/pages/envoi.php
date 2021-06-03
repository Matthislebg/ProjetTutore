
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
                        'message' => $_POST["envoyer"]));

                        $to  = 'lboiss01@etud-upem.fr, crexharr@etud.u-pem.fr, mrouss23@etud.u-pem.fr, mbouanch@etud.u-pem.fr';
                        /*mmifyw@gmail.com*/
                        $subject = 'Nouveau message sur votre site! !';
            
                        $message = '
                        <html>
                        <head>
                        <title>Nouveau messsage </title>
                        </head>
                        <body>
                        <h3>['.date("Y-m-d H:i:s").']</h3><h2> Nouveau message reçu, il s\'agit de '.$_POST['name'].' son mail est : <a href="'.$_POST['mail'].'">'.$_POST['mail'].'</a> voici son message :</h2>
                        <p> '.$_POST['envoyer'].' </p>
                        </body>
                        </html>
                        ';
            
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
                        $headers .= 'From: crexharr@etud.u-pem.fr' . "\r\n";
            
                        mail($to,$subject,$message,$headers);


  $req = null;
  echo "<h1>Merci pour votre message !</h1>";
}
?>
 
  
  <a href="../index.php">Retour à l'accueil</a>
</body>
</html>
