<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../vue/ConnexionEM.php');
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
        <a href="#films">Films à l'affiche</a>
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
<section id="films" class="films-section">
    <h3>Nos films à l'affiche</h3>
    <div class="film-container">
        <div class="film">
            <a href="https://www.youtube.com/watch?v=0tC4k1BRJdY"><img src="../assets/img/F4.webp" alt="Film 1"></a>
        </div>
        <div class="film">
            <a href="https://www.youtube.com/watch?v=gKXFUSBBJL0"><img src="../assets/img/topgun.webp" alt="Film 2"></a>
        </div>
        <div class="film">
            <a href="https://www.youtube.com/watch?v=73_1biulkYk"><img src="../assets/img/deadpool3.webp" alt="Film 3"></a>
        </div>
        <div class="film">
            <a href="https://www.youtube.com/watch?v=-BLM1naCfME"><img src="../assets/img/Tetris.jpg" alt="Film 4"></a>
        </div>

        <div class="film">
            <a href="https://www.youtube.com/watch?v=zSWdZVtXT7E"><img src="../assets/img/Inter.jpg" alt="Film 5"></a>
        </div>
        <div class="film">
            <a href="https://www.youtube.com/watch?v=TQ-9We-lxiA"><img src="../assets/img/sonic3.jpg" alt="Film 6"></a>
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
    <a href="AjoutFilmEM.php"><p>Ajouter un film</p></a>
    <hr>
    <p>&copy; 2025 Écran Majestueux | <a href="Conditions_d'utilisation.html">Mentions légales</a> | <a href="Conditions_d'utilisation.html">Politique de confidentialité</a></p>
    <p>Suivez-nous sur les réseaux sociaux: <a href="https://www.facebook.com/share/18gNsJZcJq/">Facebook</a>, <a href="https://www.instagram.com/ecranmajestueux/">Instagram</a>, <a href="https://x.com/EcranM89780">X</a></p>
</footer>


