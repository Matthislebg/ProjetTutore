<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci !</title>
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/redirect.css">
</head>
<body>
    <header>
    <?php 
        $titre = "";
        include 'header.php';
        ?>
    </header>
    <section>
        <img src="../medias/logo.svg" alt="logo MMI FYW">
    <h2>Merci pour votre message !</h2>
    <p>L'équipe MMI FYW le prendra en charge dès que possible. </p>
    <a href="accueil.php">ACCUEIL</a>
    </section>
    
    <footer>
    <?php 
        include 'footer.php';
    ?>
    </footer>
</body>
</html>