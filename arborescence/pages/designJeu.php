<!-- <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Jeu Design</title>
  <link rel="stylesheet" href="designJeu.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body> -->
  <!-- <div class="top">
    <h1>Devenez notre Graphiste</h1>
    <div><p>Laissez votre créativité prendre le contrôle</p></div>
  </div> -->

<div id="toolBar" class="toolbar">
  <div>
    <div id="selectColors" class="select__colors">
      <input type="radio" name="radioColors" id="red" value="#1DB250">
      <label for="red" class="radio__colors"></label>
      <input type="radio" name="radioColors" id="blue" value="#0B83C6">
      <label for="blue" class="radio__colors"></label>
      <input type="radio" name="radioColors" id="green" value="#D4499A">
      <label for="green" class="radio__colors"></label>
      <input type="radio" name="radioColors" id="yellow" value="#EEB81D">
      <label for="yellow" class="radio__colors"></label>
      <input type="radio" name="radioColors" id="pink" value="#FFFFFF">
      <label for="pink" class="radio__colors"></label>
      <input type="radio" name="radioColors" id="gray" value="#A9A9A9">
      <label for="gray" class="radio__colors"></label>
      <input type="radio" name="radioColors" id="black" checked value="#111111">
      <label for="black" class="radio__colors"></label>
    </div>
    <div class="buttons__canvas">
      <button type="button" id="clearCanvas" class="btn__clear">Effacer</button>
    </div>
  </div>
  <div>
    <div id="radiusTool" class="radius__tool">
      <span>Épaisseur</span>
      <input type="range" name="radiusPoint" id="radiusPoint" class="radius__point" min="1" max="20" step="1" value="10">
      <span id="radTextRadius">10</span>
    </div>
    <div id="radiusTool" class="radius__tool">
      <span>Flou</span>
      <input type="range" name="radiusBlur" id="radiusBlur" class="radius__point" min="0" max="20" step="1" value="0">
      <span id="radTextBlur">0</span>
    </div>
  </div>
</div>
<canvas id="canvas">
  Désolé, votre navigateur ne prends pas en charge ce mini-jeu. Mettez à jour votre navigateur avant de venir en MMI ! Et si vous avez encore Internet explorer, c'est le moment de changer. <a href="https://www.mozilla.org/fr/firefox/download/thanks/">Cliquez ici pour télécharger la dernière version du navigateur Mozilla Firefox.</a>
</canvas>
  <script  src="designJeu.js"></script>
</body>
<!-- </html> -->