<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony - Log in</title>
    <link rel="stylesheet" href="../styles/style2.css">
    <link rel="stylesheet" href="../styles/login2.css">
    <link rel="icon" href="../images/Beeldlogo.svg" type="image/icon type">
    <script src="../script/script.js"></script>
</head>
<body>
    <div class="holderDiv">
        <?php include '../includeable/header.php';?>
        <div class="bodyDiv">
            <div class="loginForm">
                <h2>Log in</h2>
                <p>Log in met itsme om toegang te krijgen tot je persoonlijke integratie- en ondersteuningstraject. Met itsme zorgen we voor een veilige en eenvoudige manier om je identiteit te verifiëren, zodat je snel en gemakkelijk gebruik kunt maken van onze diensten. Samen maken we jouw integratieproces succesvol en aangenaam.</p>
                <form action="loggedIn.php" method="POST">
                    <button type="submit"><img src="../images/itsme.png" alt="" width="40px"><span>Log in with itsme</span></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>