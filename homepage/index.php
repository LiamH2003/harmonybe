<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony - Homepage</title>
    <link rel="stylesheet" href="../styles/style6.css">
    <link rel="stylesheet" href="../styles/homestyle.css">
    <link rel="icon" href="../images/Beeldlogo.svg" type="image/icon type">
    <script type="text/javascript" src="../script/script2.js"></script>
</head>
<body>
    <div class="holder">
        <div class="mainDiv">
            <?php include '../includeable/header.php';?>
            <div class="introDiv">
                <h1>Welkom bij Harmony!</h1>
                <p>Maak kennis met Harmony, jouw gids voor een soepele integratie in België. Begin vandaag met onze introductiecursus en neem contact op met een consultant voor persoonlijke begeleiding.</p><br>
                <a href="get_started/index.php">Get Started</a>
            </div>
        </div>
        <div class="contentDiv">
            <div class="contentInnerDiv">
                <a class="frameDiv1 frameDiv" href="../about/index.php">
                    <div class="imageDiv1 imageDivs"><img src="../images/icon1.jpg" alt=""></div>
                    <div class="textDiv1 textDivs">
                        <h2>About</h2>
                        <p>Ontdek Harmony, het platform dat nieuwkomers in België ondersteunt bij hun integratie. Wij bieden taallessen, maatschappelijke oriëntatie en persoonlijke begeleiding. Onze missie is het creëren van een inclusieve gemeenschap waarin iedereen zich thuis voelt en succesvol kan integreren. Samen bouwen we aan een harmonieuze samenleving.</p>
                    </div>
                </a>
                <a class="frameDiv1 frameDiv" href="#">
                    <div class="imageDiv1 imageDivs"><img src="../images/icon2.png" alt=""></div>
                    <div class="textDiv1 textDivs">
                        <h2>Cursussen</h2>
                        <p>Bij Harmony begrijpen we dat het leren van de taal en cultuur essentieel is voor een succesvolle integratie in België. Daarom bieden we een breed scala aan cursussen aan die speciaal zijn ontworpen om je snel en effectief op weg te helpen. Of je nu een beginner bent of je vaardigheden verder wilt ontwikkelen, wij hebben de juiste cursus voor jou.</p>
                    </div>
                </a>
                <a class="frameDiv1 frameDiv" href="#">
                    <div class="imageDiv1 imageDivs"><img src="../images/icon3.png" alt=""></div>
                    <div class="textDiv1 textDivs">
                        <h2>Inburgeringsproces</h2>
                        <p>Volg het integratieproces stap voor stap met Harmony. Onze website begeleidt je door elke fase van de inburgering, van taallessen tot maatschappelijke oriëntatie. We zorgen ervoor dat je je thuis voelt in onze samenleving, met persoonlijke ondersteuning en duidelijke informatie om je succesvol te laten integreren in België.</p>
                    </div>
                </a>
                <a class="frameDiv1 frameDiv" href="#">
                    <div class="imageDiv1 imageDivs"><img src="../images/icon5.png" alt=""></div>
                    <div class="textDiv1 textDivs">
                        <h2>Inbox</h2>
                        <p>Blijf op de hoogte van het laatste nieuws en de aankomende evenementen van Harmony. Wij organiseren regelmatig activiteiten en workshops die je helpen om meer te leren over de Belgische cultuur en om in contact te komen met andere nieuwkomers. Daarnaast delen we belangrijk nieuws en updates over ons programma en integratiehulp.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="footerDiv">
            <div class="footerItem1"><a href="#">Terms of service</a></div>
            <div class="footerItem2"><a href="#">Homepage</a></div>
            <div class="footerItem3">Social media</div>
        </div>
    </div>
</body>
</html>
