<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../vue/ConnexionEM.html');
}
?>


