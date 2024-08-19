<?php
session_start();

if (isset($_GET['section'])) {
    $section = $_GET['section'];

    if ($section == 'accountInfo') {
        echo '
            <h3 class="contentTitle">Account information</h3>
            <div class="accountInfo">
                <div class="mainFields">
                    <div class="mainField">
                        <label for="name">Name:</label>
                        <span id="name">Thomas Van Den Bosse</span>
                    </div>
                    <div class="mainField">
                        <label for="email">Email:</label>
                        <span id="email">thomas.vandenbosse@harmony.org</span>
                    </div>
                    <div class="mainField">
                        <label for="phone">Phone Number:</label>
                        <span id="phone">+32 123 45 67 89</span>
                    </div>
                    <div class="mainField">
                        <label for="address">Address:</label>
                        <span id="address">123 Main Street, Brussels, Belgium</span>
                    </div>
                </div>
            </div>
        ';
    } elseif ($section == 'support') {
        echo '
            <h3 class="contentTitle">Communication and Support</h3>
            <div class="support">
                <div class="mainFields">
                    <div class="mainField">
                        <label for="contactEmail">Contact Email:</label>
                        <span>support@harmony.org</span>
                    </div>
                    <div class="mainField">
                        <label for="phoneSupport">Phone Support:</label>
                        <span>+32 987 65 43 21</span>
                    </div><br>
                    <a href="../inbox/index.php" class="saveButton">Contact Support</a>
                </div>
            </div>
        ';
    } elseif ($section == 'languages') {
        $languages = [
            'English', 'Spanish', 'French', 'German', 'Italian', 'Portuguese', 'Dutch', 'Chinese', 'Japanese', 'Korean', 
            'Arabic', 'Russian', 'Turkish', 'Hindi', 'Bengali', 'Urdu', 'Thai', 'Vietnamese', 'Swahili', 'Persian'
        ];

        $selectedLanguage = isset($_SESSION['selected_language']) ? $_SESSION['selected_language'] : 'Dutch';

        echo '<h3 class="contentTitle">Select a Language</h3>';
        echo '<ul class="languageList">';

        foreach ($languages as $language) {
            // Add a class to the selected language
            $class = ($language === $selectedLanguage) ? 'class="active"' : '';
            echo '<li ' . $class . '>' . htmlspecialchars($language) . '</li>';
        }

        echo '</ul>';
    }
}
?>
