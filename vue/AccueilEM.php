<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../vue/ConnexionEM.html');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Écran Majestueux</title>
    <link href="../assets/css/AccueilEM.css" rel="stylesheet">

</head>

<body>
<header>
    <h1>Écran Majestueux : <?= $_SESSION['email']?></h1>
    <nav>
        <a href="#">Accueil</a>
        <a href="#films">Films à l'affiche</a> <!-- Lien modifié pour pointer vers #films -->
        <a href="#">Utilisateur</a>
        <a href="#">Administrateur</a>
        <a href="#">Contact</a>
    </nav>
</header>
<section class="hero">
    <div>
        <h2>Bienvenue dans un monde cinématographique d'exception</h2>
        <button onclick="window.location.href='#'">Découvrez nos films</button>
    </div>
</section>
<section id="films" class="films-section"> <!-- Ajout de l'ID "films" -->
    <h3>Nos films à l'affiche</h3>
    <div class="film-container">
        <div class="film">
            <img src="../assets/img/F4.webp" alt="Film 1">
        </div>
        <div class="film">
            <img src="../assets/img/topgun.webp" alt="Film 2">
        </div>
        <div class="film">
            <img src="../assets/img/deadpool3.webp" alt="Film 3">
        </div>
        <div class="film">
            <img src="../assets/img/Tetris.jpg" alt="Film 4">
        </div>

        <div class="film">
            <img src="../assets/img/Inter.jpg" alt="Film 5">
        </div>
        <div class="film">
            <img src="../assets/img/sonic3.jpg" alt="Film 6">
        </div>
    </div>
</section>
<footer>
    <hr>
    <a href ="InscriptionEM.php"><p>Revenir à l'inscription</p></a>
    <a href ="ConnexionEM.php"><p>Revenir à la connexion</p></a>
    <br>
    <h1>Paramètre de compte :</h1>
    <a href="DeconnexionEM.php"><p>Deconnexion du compte</p></a>
    <a href="ModificationEM.php"><p>Modifier le compte</p></a>
    <a href="SupressionEM.php"><p>Supression du compte</p></a>
    <hr>
    <p>&copy; 2025 Écran Majestueux | <a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
    <p>Suivez-nous sur les réseaux sociaux: <a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Twitter</a></p>
</footer>


