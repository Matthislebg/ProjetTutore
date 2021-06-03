<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interviews MMI - Find Your Way</title>    
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/interviews.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../scripts/recherche.js"></script>
<SCRIPT TYPE="text/javascript">$(document).ready(function(){
 $('.interview_1').on('click',function(){
   $('.popup_1').css('display','block');
   $('.background').css('display','flex');
 })
$('.interview_2').on('click',function(){
   $('.popup_2').css('display','block');
   $('.background').css('display','flex');
 })
 $('.interview_3').on('click',function(){
   $('.popup_3').css('display','block');
   $('.background').css('display','flex');
 })
 $('.interview_4').on('click',function(){
   $('.popup_4').css('display','block');
   $('.background').css('display','flex');
 })
 $('.popup_button').on('click',function(){
  $('.popup').css('display','none');
   $('.background').css('display','none');
})
})</SCRIPT>
</head>
<body>
    <header>
        <?php 
        $titre = "";
        include 'header.php';
        ?>
    </header>
    <section>   

        <div class="interview_1"><p>DESIGN</p></div>
        <div class="interview_2"><p>PROGRAMMATION</p></div>  
        <div class="interview_3"><p>COMMUNICATION</p></div>       
        <div class="interview_4"><p>AUDIOVISUEL</p></div>
        <div class="popup_1 popup">
            <h2>DESIGN - ROBIN LLOPIS </h2>
            <iframe width="100%" height="100%" src="<?php  echo $video;  ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div>
        <div class="popup_2 popup">
            <h2>PROGRAMMATION - GAËLLE CHARPENTIER </h2>
            <iframe width="100%" height="100%" src="<?php  echo $video;  ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div>
        </div>
        <div class="popup_3 popup">
        <h2> COMMUNICATION - CLARISSE HENRY  </h2>
        <iframe width="100%" height="100%" src="<?php  echo $video;  ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div>
        </div>
        <div class="popup_4 popup">
        <h2> AUDIOVISUEL - ANNE TASSO  </h2>  
        <iframe width="100%" height="100%" src="<?php  echo $video;  ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div>
        </div>
        <div class="background"></div>
    </section>
</body>
</html>