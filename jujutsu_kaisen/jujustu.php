<?php

include 'inc/init.inc.php';

include 'inc/fonctions.inc.php';

      
  
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jujustu Kaisen</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://kit.fontawesome.com/2907619ea0.js" crossorigin="anonymous"></script>
</head>
<body>

<header>
        <a href="https://jujutsu-kaisen.fandom.com/fr/wiki/Wiki_Jujutsu_Kaisen" target="_blank"><img src="assets/img/Jujutsu_Kaisen_Season_1.webp" alt="logo" class="logo"></a>
         <img src="assets/img/menuburger.jpg" id="burger" alt="Menu"> 
        <nav>
            <a href="#faq">F.A.Q</a>
            <a href="#perso">Personnages</a>
            <a href="#history">Histoire</a>
        </nav>
        <div class="clear"></div>
    </header>

        <img src="assets/img/Jujutsu-Kaisen-1.jpg" id="menu" alt="jujutsu kaisen" style="display: block; margin:auto;">

        
        <h1>Histoire</h1>

        <section id="histoire">

        <div class="history">
                        <p>Jujutsu Kaisen raconte l'histoire de Yuji Itadori, un adolescent ordinaire toutefois doté d'une force physique hors du commun et membre du club de spiritisme de son lycée.<br>
                            Cependant, la vie de Yuji prend une tournure soudaine lorsqu'il rencontre Megumi Fushiguro, un exorciste qui tente de récupérer une relique millénaire.<br> Suite à une attaque 
                            de fléaux, alors qu'ils sont presque vaincus par l'un des esprits, Yuji avale la relique.<br> En conséquence, l'adolescent devient possédée par le fléau qui habite l'artéfact, 
                            un démon millénaire nommé Ryomen Sukuna.<br> Malheureusement, il est condamné à mort par les exorcistes mais obtient un sursis qu'à une seule condition : 
                            trouver et ingurgiter tous les « Doigts de Sukuna ».<br>
                            Yuji va alors plonger dans le monde occulte des exorcistes et des fléaux dans l'espoir de trouver le reste des « Doigts de Sukuna ».</p>
                    </div>
                    <div id="yuta">
                        <img src="assets/img/yuta.jpg" id="yutaa" alt="yuta">
                    </div>
                    
                </section>
    
       


   <section id="perso">
        <h1>Personnages</h1>
            <div class="slider">
                <input type="radio" name="testimonial" id="t-1" />
                <input type="radio" name="testimonial" id="t-2" checked/>
                <input type="radio" name="testimonial" id="t-3" />
                <input type="radio" name="testimonial" id="t-4" />
                <div class="testimonials mb-8">
                
                <label class="item" for="t-1">
                    <div class="mycard">
                    <p class="cardtitle">Gojo</p>
                    <div>
                        <a href="https://jujutsu-kaisen.fandom.com/fr/wiki/Satoru_Gojo" target="_blank"><img src="assets/img/Gojo.webp" alt="Gojo" class="cardimg" /></a>
                    </div>
                    <div>
                        <p class="carddescription">Il est le professeur principal de Yuji Itadori, Megumi Fushiguro et Nobara Kugisaki. 
                            Il était également un ancien camarade de classe de Suguru Geto et de Shoko Ieiri à l'école 
                        d'exorcisme et un ancien élève de Masamichi Yaga. Considéré comme la seul puissance du clan
                        Gojo, Satoru est l'actuel chef de sa famille.</p>
                    </div>
                    </div>
                </label>
                <label class="item" for="t-2">
                    <div class="mycard">
                    <p class="cardtitle">Itadori</p>
                    <div>
                        <a href="https://jujutsu-kaisen.fandom.com/fr/wiki/Yuji_Itadori" target="_blank"><img src="assets/img/itadori.webp" alt="Itadori" class="cardimg" /></a>
                    </div>
                    <div>
                        <p class="carddescription">Avant de mourir, son grand-père lui demande de mettre sa force au service des autres ce qu'il
                            fait le jour même, quand les fléaux envahissent le lycée et attaquent ses amis. Il finira par 
                            être possédé par Ryomen Sukuna, une fléau légendaire. Son credo est “protéger tout le monde”.</p>
                    </div>
                    </div>
                </label>
                <label class="item" for="t-3">
                    <div class="mycard">
                    <p class="cardtitle">Megumi</p>
                    <div>
                        <a href="https://jujutsu-kaisen.fandom.com/fr/wiki/Megumi_Fushiguro" target="_blank"><img src="assets/img/Megumi.webp" alt="Megumi" class="cardimg" /></a>
                    </div>
                    <div>
                        <p class="carddescription">Megumi Fushiguro est l'un des protagonistes de Jujutsu Kaisen. Il est un élève de seconde de 
                            l'école d'exorcisme de Tokyo avec Yuji Itadori et Nobara Kugisaki. Il n'est autre que le fils de Toji Fushiguro, 
                            un ancien membre du clan Zenin devenu tueur à gages, et est le petit frère par alliance de Tsumiki Fushiguro</p>
                    </div>
                    </div>
                </label>
                <label class="item" for="t-4">
                    <div class="mycard">
                    <p class="cardtitle">Nobara</p>
                    <div>
                        <a href="https://jujutsu-kaisen.fandom.com/fr/wiki/Nobara_Kugisaki" target="_blank"><img src="assets/img/Nobara.webp" alt="Nobara" class="cardimg" /></a>
                    </div>
                    <div>
                        <p class="carddescription">Originaire de la campagne, Nobara atterrit à Tokyo dans le but de fuir son train de vie et de retrouver 
                            son amie d'enfance, Saori. Elle est une élève de seconde à l'école d'exorcisme de Tokyo avec Yuji Itadori
                            et Megumi Fushiguro, et est l'élève de Satoru Gojo.</p>
                    </div>
                    </div>
                </label>
                </div>
                <div class="dots">
                <label for="t-1"></label>
                <label for="t-2"></label>
                <label for="t-3"></label>
                <label for="t-4"></label>
                </div>
            </div>


    </section>

    <section id="faq">

        <?php
        
        include 'inc/footer.inc.php';

        ?>