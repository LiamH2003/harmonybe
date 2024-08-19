<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony - Intakegesprek</title>
    <link rel="stylesheet" href="../styles/style6.css">
    <link rel="stylesheet" href="../styles/intake2.css">
    <link rel="icon" href="../images/Beeldlogo.svg" type="image/icon type">
    <script src="../script/script2.js"></script>
</head>
<body>
    <div class="holderDiv">
        <?php include '../includeable/header.php';?>
        <div class="bodyDiv">
            <div class="intakeContainer">
                <h2>Intakegesprek</h2>
                <p>Na aanmelding wordt je uitgenodigd voor een intakegesprek. Tijdens dit gesprek wordt je situatie beoordeeld en worden de inburgeringsvereisten uitgelegd. Ook krijg je informatie over de beschikbare cursussen en ondersteuningsmogelijkheden.</p>
                
                <div class="courses">
                    <h3>Beschikbare Cursussen</h3>
                    <ul>
                        <li>Nederlands als tweede taal (NT2)</li>
                        <li>Inburgeringscursus</li>
                        <li>Culturele integratie</li>
                        <li>Arbeidsmarktoriëntatie</li>
                    </ul>
                </div>
                
                <div class="support">
                    <h3>Ondersteuningsmogelijkheden</h3>
                    <ul>
                        <li>Persoonlijke begeleiding</li>
                        <li>Hulp bij huisvesting</li>
                        <li>Juridisch advies</li>
                        <li>Mentorschap</li>
                    </ul>
                    <div class="buttonsDiv">
                        <a href="plan_intake.php" class="scheduleButton">Intakegesprek Plannen</a>
                        <a href="../2.traject/index.php" class="next">Next step &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>