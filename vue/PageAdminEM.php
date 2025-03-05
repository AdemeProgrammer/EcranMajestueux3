<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../vue/ConnexionEM.php');
}
?>
<hr>
<h1>Paramètre de l'Admin :</h1>
<a href="DeconnexionEM.php"><p>Deconnexion de votre compte</p></a>
<a href="ModificationEM.php"><p>Modification de votre compte</p></a>
<a href="SupressionEM.php"><p>Supression de votre compte compte</p></a>
<a href="AjoutFilmEM.php"><p>Ajouter un film</p></a>
<hr>
