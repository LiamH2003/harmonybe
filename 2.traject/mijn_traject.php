<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony - Mijn Traject</title>
    <link rel="stylesheet" href="../styles/style5.css">
    <link rel="stylesheet" href="../styles/traject4.css">
    <link rel="icon" href="../images/Beeldlogo.svg" type="image/icon type">
    <script src="../script/script2.js"></script>
</head>
<body>
    <div class="holderDiv">
        <?php include '../includeable/header.php';?>
        <div class="bodyDiv">
            <!-- Kalender Container -->
            <div class="calendarContainer">
                <div id="calendar"></div>
                <a href="../2.traject/index.php" class="backButton">Terug naar Inburgeringstrajectinfo</a>
            </div>

            <!-- Event Modal -->
            <div id="eventModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2 id="modalTitle"></h2>
                    <p id="modalBody"></p>
                </div>
            </div>

            <!-- Back Button -->
        </div>
    </div>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendarEl = document.getElementById('calendar');
        const events = [
            { title: 'Meeting with Thomas van den Bosse', date: '2024-08-07', description: 'Discussing the integration plan and next steps.' },
            { title: 'Cursus Nederlands - Beginners', date: '2024-08-10', description: 'First session of Dutch language course for beginners.' },
            { title: 'Deadline: Homework Assignment 1', date: '2024-08-15', description: 'Submit your first homework assignment for the Dutch course.' },
            { title: 'Cultural Event: Museum Visit', date: '2024-08-20', description: 'Join us for a cultural visit to the local museum.' }
        ];

        // Generate calendar days
        function generateCalendar() {
            const now = new Date();
            const month = now.getMonth(); // Current month
            const year = now.getFullYear(); // Current year
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const firstDay = new Date(year, month, 1).getDay();
            
            // Add empty days at the beginning
            for (let i = 0; i < firstDay; i++) {
                const emptyDiv = document.createElement('div');
                emptyDiv.className = 'day';
                calendarEl.appendChild(emptyDiv);
            }

            // Add days of the month
            for (let day = 1; day <= daysInMonth; day++) {
                const dayDiv = document.createElement('div');
                dayDiv.className = 'day';
                dayDiv.textContent = day;

                // Add event details if present
                events.forEach(event => {
                    const eventDate = new Date(event.date);
                    if (eventDate.getDate() === day && eventDate.getMonth() === month) {
                        const eventElem = document.createElement('div');
                        eventElem.className = 'event';
                        eventElem.textContent = event.title;
                        eventElem.style.cursor = 'pointer';
                        eventElem.addEventListener('click', function () {
                            document.getElementById('modalTitle').textContent = event.title;
                            document.getElementById('modalBody').textContent = event.description;
                            document.getElementById('eventModal').style.display = 'block';
                        });
                        dayDiv.appendChild(eventElem);
                    }
                });

                calendarEl.appendChild(dayDiv);
            }
        }

        // Close the modal
        const modal = document.getElementById('eventModal');
        const span = document.getElementsByClassName('close')[0];

        span.onclick = function () {
            modal.style.display = 'none';
        };

        window.onclick = function (event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        };

        generateCalendar();
    });
</script>
