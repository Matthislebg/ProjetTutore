<?php
    include "../../connexionPDO.php";

    $sql = "INSERT INTO `jeucm`(`pseudo`, `textMsg`, `couleur`) VALUES (:pseudo,:textMsg,:couleur)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':pseudo', $_GET['pseudo'], PDO::PARAM_STR);
    $stmt->bindParam(':textMsg', $_GET['textMsg'], PDO::PARAM_STR);
    $stmt->bindParam(':couleur', $_GET['color'], PDO::PARAM_STR);
    $stmt->execute();

    // Envoi de mail
    $to  = 'mmifyw@gmail.com';
    $subject = 'Nouveau message de '.$_GET['pseudo'].' le jeu du CM !';

    $message = '
    <h1 style="font-size: 2rem; border-bottom: solid 2px black; margin-bottom: 3vh; margin-left: 2vw;"><span style="color: '.$_GET['color'].';">L</span>\'utilisateur nommé <span color="'.$_GET['color'].'">'.$_GET['pseudo'].'</span> à écrit :</h1><br>
    <p>'.$_GET['textMsg'].'</p>
    <a style="background-color: #00acee; border-radius: 7px; border: none; text-decoration: none; color: white; position: relative;" href="https://etudiant.u-pem.fr/~crexharr/arborescence/pages/communicationJeu/connection.php">Page d\'administration</a>
    ';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: jeuCM <CMMMMIFYW@etudiant.u-pem.fr>' . "\r\n";

    mail($to,$subject,$message,$headers);
?>


