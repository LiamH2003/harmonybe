<?php
session_start();

if (isset($_POST['language'])) {
    $_SESSION['selected_language'] = $_POST['language'];
    echo 'Language saved: ' . $_POST['language'];
} else {
    echo 'No language selected';
}
?>
