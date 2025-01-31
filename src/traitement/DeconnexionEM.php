<?php
session_start();
session_destroy();
header('Location:ConnexionEM.php');
?>