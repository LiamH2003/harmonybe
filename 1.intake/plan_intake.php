<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony - Plan Intakegesprek</title>
    <link rel="stylesheet" href="../styles/style5.css">
    <link rel="stylesheet" href="../styles/intake.css">
    <link rel="icon" href="../images/Beeldlogo.svg" type="image/icon type">
    <script src="../script/script2.js"></script>
</head>
<body>
    <div class="holderDiv">
        <?php include '../includeable/header.php';?>
        <div class="bodyDiv">
            <div class="intakeContainer">
                <h2>Plan Intakegesprek</h2>
                <p>Hier kunt u uw intakegesprek plannen. Vul alstublieft de benodigde informatie in om een afspraak te maken.</p>
                <form class="intakeForm" action="../1.intake/index.php" method="post">
                    <div class="formField">
                        <label for="name">Naam:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="formField">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="formField">
                        <label for="phone">Telefoonnummer:</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="formField">
                        <label for="date">Voorkeursdatum:</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="formField">
                        <label for="time">Voorkeurstijd:</label>
                        <select id="time" name="time" required>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                        </select>
                    </div>
                    <div class="formField">
                        <input type="submit" value="Plan Intakegesprek">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>