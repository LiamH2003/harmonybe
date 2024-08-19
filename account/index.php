<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony - Account</title>
    <link rel="stylesheet" href="../styles/style6.css">
    <link rel="stylesheet" href="../styles/account5.css">
    <link rel="icon" href="../images/Beeldlogo.svg" type="image/icon type">
    <script src="../script/script2.js"></script>
    <style>
        /* Add your CSS here */
        .active {
            background-color: #FFA95C;
        }
    </style>
</head>
<body>
    <div class="holderDiv">
        <?php include '../includeable/header.php';?>
        <div class="bodyDiv">
            <div class="accountNav">
                <h2>Account settings</h2>
                <div onclick="loadContent('accountInfo')" class="ele1">Account information</div>
                <div onclick="loadContent('support')" class="ele3">Communication and Support</div>
                <div onclick="loadContent('languages')" class="ele4">Talen</div>
                <a href="../logout/index.php" class="logout">Log out</a>
            </div>
            <div class="contentDiv">
                <!-- Content will be loaded here dynamically -->
            </div>            
        </div>
    </div>

    <script>
        function loadContent(section) {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'load_section.php?section=' + section, true);
            xhr.onload = function() {
                if (this.status === 200) {
                    document.querySelector('.contentDiv').innerHTML = this.responseText;
                    // Reattach event listeners after content is loaded
                    if (section === 'languages') {
                        document.querySelectorAll('.languageList li').forEach(item => {
                            item.addEventListener('click', function() {
                                setActiveLanguage(this);
                            });
                        });
                    }
                }
            };
            xhr.send();
        }

        function setActiveLanguage(element) {
            // Remove active class from all items
            const items = document.querySelectorAll('.languageList li');
            items.forEach(item => item.classList.remove('active'));

            // Add active class to the clicked item
            element.classList.add('active');

            // Save the selected language
            const selectedLanguage = element.textContent;
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_lan.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.status === 200) {
                    console.log(this.responseText);
                }
            };
            xhr.send('language=' + encodeURIComponent(selectedLanguage));
        }

        // Event listeners for navigation
        document.querySelector('.ele1').addEventListener('click', function() {
            loadContent('accountInfo');
        });

        document.querySelector('.ele2').addEventListener('click', function() {
            loadContent('settings');
        });

        document.querySelector('.ele3').addEventListener('click', function() {
            loadContent('support');
        });

        document.querySelector('.ele4').addEventListener('click', function() {
            loadContent('languages');
        });

        // Initial load of account information
        loadContent('accountInfo');
    </script>
</body>
</html>
