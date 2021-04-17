<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../styles/contact.css">
</head>
<body>
<header></header>

<h1>Contact</h1>
<div class="container">
<form action="lienphpjecrois" method="get/post">
  <div>
    <label for="name">nom :</label>
    <input type="text" id="name" name="user_name" />
  </div>
  <div>
    <label for="mail">e-mail:</label>
    <input type="email" id="mail" name="user_mail" />
  </div>
  <div>
    <label for="msg">Message :</label>
    <textarea id="msg" name="user_message" placeholder="Une question ?"></textarea>
  </div>
  <div class="button">
    <button type="submit">envoyer</button>
  </div>
</form>
</div>

<footer></footer>
</body>
</html>