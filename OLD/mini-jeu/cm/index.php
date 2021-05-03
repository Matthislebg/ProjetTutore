<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devenez notre CM !</title>
    <link href="styles.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="scripts.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<?php
    $db = new PDO('mysql:host=localhost;dbname=mmifyw', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    if(isset($_POST['envoyer'])){
        $sql = "INSERT INTO `jeucm`(`pseudo`, `textMsg`, `couleur`) VALUES (:pseudo,:textMsg,:couleur)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
        $stmt->bindParam(':textMsg', $_POST['textMsg'], PDO::PARAM_STR);
        $stmt->bindParam(':couleur', $_POST['color'], PDO::PARAM_STR);
        $stmt->execute();


        // Envoie de mail

        // $to  = 'sb.lucien77144@gmail.com';
        // $subject = 'Nouveau message sur le jeu du CM !';

        // $message = 'Nouveau message sur le jeu du CM du projet tutoré ! Rendez-vous sur la page admin pour le consulter et/ou le valider !';

        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // $headers .= 'From: jeuCM <CMMMMIFYW@etudiant.u-pem.fr>' . "\r\n";

        // mail($to,$subject,$message,$headers);

        header('Location: index.php?success');
    }
?>

    <div class="cm">
        <h1>Devenez notre CM !</h1>
        <div></div>
        <p>Échangez avec la communauté afin de développer des liens</p>

        <div class="jeuCm">
            <div class="headjeu">
                <p class="heure">--:--</p>
                <div class="periph"></div>
                <p class="reseau">x</p>
            </div>
            <div class="headReseau">
                <a class="paramlogo" href="#"><img src="images/params.svg">
                <div class="notif"></div>
                </a>
                <a class="logo" href="#"><img src="images/logo.svg"></a>
                <a class="msg" href="#"><img src="images/message.svg"></a>
                <div class="params">
                    <h2>Paramètres</h2>
                    <p>Modération du flux :</p>
                    <p>Sans
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    Avec</p>
                    <p class="infosParam">Cette option permet d'afficher uniquement les messages certifiés</p>
                </div>
            </div>
            <div class="flux">

            <?php

            $link = new PDO('mysql:host=localhost;dbname=mmifyw', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

            $sql = "SELECT `id`, `pseudo`, `textMsg`, `certif`, `couleur`FROM `jeucm` ORDER BY id DESC";
            $req = $link -> prepare($sql);
            $req -> execute();

            
            while($data = $req -> fetch()){

                if($data['certif']){
                    $certif = "";
                    $check = '<span class="certif"><svg class="check" viewBox="0 0 24 24"><path d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z"/></svg></span>';
                }else{
                    $certif = "nocertif";
                    $check = "";
                }

                echo('
                <div class="mPost '.$certif.'">
                    <div class="mPostHead">
                        <svg viewBox="0 0 430 317">
                            <path fill="'.$data['couleur'].'" d="M353,317H318V67L215,142,112,67V317H77V164c-12.665-9-28.335-21-41-30V285L0,260C0.333,195.006,0,123.667,0,66c77.82,55.935,52.336,37.668,78,56,0.333-40.329-.333-81.671,0-122,45.329,33,91.671,67,137,100C260.329,67,306.671,33,352,0h0V122c25.664-18.332,52.336-37.668,78-56h0V260c0.082,0.169.171,0.294,0,0-11.332,7.666-24.668,17.334-36,25V134l-41,30V317ZM198,160h34v31H198V160Zm0,47h34V317H198V207Z"/>
                        </svg>
                        <h2>'.$data['pseudo'].$check.'<h2>
                    </div>
                    <p>'.$data['textMsg'].'</p>
                </div>
                ');
            }
            ?>

            </div>

            <form class="Smsg" action="" method="POST">
                <div>
                    <input type="text" placeholder="Pseudo" maxlength="20" class="pseudo" name="pseudo" required="">
                    <input type="color" name="color" class="color" value="#0B83C6">
                </div>
                <textarea rows="20" placeholder="Que souhaitez-vous dire à la communauté ?" maxlength="200"  class="textMsg" name="textMsg" required=""></textarea>
                <h3 class="charact"><span class="counter"></span> / 200</h3>
                <input type="submit" name="envoyer" value="Envoyer" class="envoyer">
            </form>
        </div>
    </div>

</body>
</html>