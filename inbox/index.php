<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony - Inbox</title>
    <link rel="stylesheet" href="../styles/style6.css">
    <link rel="stylesheet" href="../styles/inbox.css">
    <link rel="icon" href="../images/Beeldlogo.svg" type="image/icon type">
    <script src="../script/inbox_script.js"></script>
    <script src="../script/script2.js"></script>
</head>
<body>
    <div class="holderDiv">
        <?php include '../includeable/header.php';?>
        <div class="bodyDiv">
            <div class="inboxNav">
                <div onclick="event1()" class="ele1">
                    <span class="date">2 mei 2022</span>
                    <span class="sender">Thomas Van Den Bosse</span>
                    <h4>Examens</h4>
                    <span class="favorite favorite1" onclick="favorite(1)"><img src="../images/fav1.png" alt=""></span>
                </div>
                <div onclick="event2()" class="ele2">
                    <span class="date">1 april 2022</span>
                    <span class="sender">Thomas Van Den Bosse</span>
                    <h4>Introductiecursus</h4>
                    <span class="favorite favorite2" onclick="favorite(2)"><img src="../images/fav1.png" alt=""></span>
                </div>
                <div onclick="event3()" class="ele3">
                    <span class="date">16 februari 2022</span>
                    <span class="sender">Thomas Van Den Bosse</span>
                    <h4>Welkom!</h4>
                    <span class="favorite favorite3" onclick="favorite(3)"><img src="../images/fav1.png" alt=""></span>
                </div>
            </div>
            <div class="contentDiv">
                <div class="filterDiv">
                    <select name="typeFilter" id="typeFilter">
                        <option value="inbox">Inbox</option>
                        <option value="ongelezen">Ongelezen</option>
                        <option value="verzonden">Verzonden</option>
                        <option value="belangrijk">Belangrijk</option>
                    </select>
                    <div class="createMail"></div>
                    <div class="react"></div>
                    <div class="remove"></div>
                </div>
                <div class="mailDiv">
                    <div class="innerMailDiv">
                        <h3>Examens</h3>
                        <h4>Thomas Van Den Bosse</h4>
                        <span class="mailDate">2 mei 2022 op 19:32</span>
                        <p>
                            Beste,<br><br>

                            Ik hoop dat alles goed met je gaat.<br><br>

                            Ik schrijf je vandaag omdat ik graag even wil bijpraten over de examens voor maatschappelijke oriëntatie. Ik begrijp dat deze periode behoorlijk druk kan zijn en dat er mogelijk wat uitdagingen zijn geweest. Daarom leek het me een goed idee om te kijken of we een moment kunnen vinden om hierover te bellen.<br><br>

                            Als je tijd hebt, zou ik graag horen hoe de examens zijn verlopen en of er zaken zijn waar we rekening mee moeten houden voor toekomstige sessies. Het is belangrijk voor mij om ervoor te zorgen dat alles soepel verloopt en dat alle betrokkenen zich gesteund voelen.<br><br>

                            Zou je kunnen aangeven wanneer je beschikbaar bent voor een kort telefonisch overleg? Ik pas me graag aan jouw agenda aan, zodat we samen kunnen bespreken hoe we eventuele verbeteringen kunnen doorvoeren.<br><br>

                            Alvast bedankt voor je tijd en aandacht. Ik kijk ernaar uit om van je te horen en om samen te zorgen voor een succesvolle voortzetting van het programma.<br><br>

                            Met vriendelijke groet,<br><br>

                            Thomas Van Den Bosse<br><br>
                            HarmonyBE
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>