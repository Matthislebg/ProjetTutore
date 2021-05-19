<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin CM (jeu)</title>
    <link href="styles.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="cm">
        <h1>Page d'administration du jeu CM</h1>
        <div></div>
        <p>MMI FYW</p>

        <div class="jeuCm">
            <div class="headAdmin">
                <img class="logotop" src="images/logo.svg">
            </div>

            <div class="portal">
            <h2 class="adminH2">Connexion à la page d'administration</h2>
            <form action="" class="adminForm" method="POST">
                <input class="adminPw" type="password" placeholder="Mot de passe" maxlength="20" name="password" required="">
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