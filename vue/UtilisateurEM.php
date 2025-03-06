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
    <title>Compte</title>
    <link href="../assets/css/CatalogueEM.css" rel="stylesheet">
</head>
<body>
    <h1>Compte de : <?= $_SESSION['nom']?> <?= $_SESSION['prenom']?></h1>
    <nav>
        <a href="AccueilEM.php">Accueil</a>
        <a href="#films">Films à l'affiche</a>
        <a href="#">Utilisateur</a>
        <a href="SceanceEM.php">Séances</a>
        <a href="#contact">Contact</a>
    </nav>

    <p>Id compte : <?= $_SESSION['id_utilisateur']?></p>
    <p>Nom : <?= $_SESSION['nom']?></p>
    <p>Prenom : <?= $_SESSION['prenom']?></p>
    <p>Adresse email : <?= $_SESSION['email']?></p>
    <p>Rôle (si admin) : <?= $_SESSION['role']?></p>
</body>
</html>
