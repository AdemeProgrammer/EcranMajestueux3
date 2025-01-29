<?php
session_start();
header('location: ../../vue/Accueil.html');
if (!isset($_SESSION['email'])) {
    header('location: ../vue/ConnexionEM.html');
}
?>


