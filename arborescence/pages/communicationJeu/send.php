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
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Lexend+Deca&family=Lexend+Exa&display=swap");

    h1::first-letter {
        color: '.$_GET['color'].';
    }
    h1{
        font-family: "Lexend Exa", sans-serif;
        font-size: 2rem;
        border-bottom: solid 2px black;
        margin-bottom: 8vh;
        margin-left: 2vw;
    }
    p{
        font-family: "Lexend Exa", sans-serif;
        font-size: 1rem;
    }
    </style>
    <h1>L\'utilisateur nommé <span color="'.$_GET['color'].'">'.$_GET['pseudo'].'</span> à écrit :</h1><br>
    <p>'.$_GET['textMsg'].'</p>
    ';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: jeuCM <CMMMMIFYW@etudiant.u-pem.fr>' . "\r\n";

    mail($to,$subject,$message,$headers);
?>


