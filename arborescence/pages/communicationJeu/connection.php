<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin CM (jeu)</title>
    <link href="../../styles/communicationJeu.css" rel="stylesheet">
    <link rel="icon" href="../../medias/icon.png" type="image/png">
</head>
<body>
    <div class="cm">
        <h1>Page d'administration du jeu CM</h1>
        <p>MMI FYW</p>

        <div class="jeuCm">
            <div class="headAdmin">
                <a href="../domaine.php?page=communication" class="admin">Retour</a>
            </div>

            <div class="portal">
            <h2 class="adminH2">Connexion à la page d'administration</h2>
            <form action="" class="adminForm" method="POST">
                <input class="adminPw" type="password" placeholder="Mot de passe" maxlength="20" name="password" required>
                <input class="adminSd" type="submit" name="envoyer" value="Connexion">
            </form>
            </div>

            <?php
            if(isset($_POST['envoyer'])){
                if($_POST['password']=="admin"){
                    session_start();
                    $_SESSION['login'] = "Administrateur";
                    header('Location: admin.php');
                    exit();
                }else{
                    echo('<h3 class="wrong">Mot de passe incorrect.<h3>');
                }
                
            }
            ?>

            </div>
        </div>
    </div>

</body>
</html>