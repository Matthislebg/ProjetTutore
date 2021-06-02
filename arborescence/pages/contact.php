<!DOCTYPE html>
<html lang="fr">
 
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../scripts/recherche.js"></script>
</head>
 
<body>

<header><?php
        $titre = "";
        include 'header.php';
    ?></header>

 
    <h1>Contact</h1>
    <div class="container_2">
        <form action="envoi.php" method="POST">
            
            <div class="champ">
                <label for="name">nom </label>
                <input type="text" id="name" name="name" required />
            </div>
 
            <div class="champ">
                <label for="name">prénom </label>
                <input type="text" id="name" name="prenom" />
            </div>
 
            <div class="champ">
                <label for="mail">e-mail </label>
                <input type="email" id="mail" name="mail" required />
            </div>
 
            <div class="champ">
                <label for="cp">code postal </label>
                <input id="cp" type="text" name ="codepostal" maxlength="5" size="5"  pattern="[0-9]{5}">
            </div>
 
 
            <div class="champ">
                <label for="objet">objet </label>
                <input type="text" id="objet" name="objet" required />
            </div>
 
            <div class="champ">
                <label for="msg">message </label>
                <textarea id="msg" name="message" placeholder="Une question ?" required ></textarea>
            </div>
 
            <div class="button">
                <button type="submit" name="envoyer">Envoyer</button>
            </div>
 
        </form>
    </div>
 
    <footer></footer>
</body>
 
</html>