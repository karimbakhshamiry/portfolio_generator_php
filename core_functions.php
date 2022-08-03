<?php
    session_start();
    function isLoggedIn() {
        if (isset($_SESSION['authenticated'])) {
            return true;
        }
    }

    function handleNotLoggedIn() {
        if (!isLoggedIn()) {
            header('location: login.php');
        }
    }
?>