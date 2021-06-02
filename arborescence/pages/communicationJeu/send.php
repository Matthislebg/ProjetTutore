<?php
    include "../../connexionPDO.php";

    $sql = "INSERT INTO `jeucm`(`pseudo`, `textMsg`, `couleur`) VALUES (:pseudo,:textMsg,:couleur)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':pseudo', $_GET['pseudo'], PDO::PARAM_STR);
    $stmt->bindParam(':textMsg', $_GET['textMsg'], PDO::PARAM_STR);
    $stmt->bindParam(':couleur', $_GET['color'], PDO::PARAM_STR);
    $stmt->execute();

    // Envoi de mail
    $to  = 'sb.lucien77144@gmail.com, mmifyw@gmail.com, celine.rexharrison@gmail.com, matthis.rousselle@gmail.com, marin.bouanchaud@gmail.com';
    $subject = 'Nouveau message sur le jeu du CM !';

    $message = 'Nouveau message sur le jeu du CM du projet tutoré ! Rendez-vous sur la page admin pour le consulter et/ou le valider !';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: jeuCM <CMMMMIFYW@etudiant.u-pem.fr>' . "\r\n";

    mail($to,$subject,$message,$headers);
?>


