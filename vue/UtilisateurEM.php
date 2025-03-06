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
</head>
<body>
    <h1>Compte : <?= $_SESSION['email']?></h1>

    <p>Id compte : <?= $_SESSION['id_utilisateur']?></p>
    <p>Nom : <?= $_SESSION['nom']?></p>
    <p>Prenom : <?= $_SESSION['prenom']?></p>
    <p>Adresse email : <?= $_SESSION['email']?></p>
    <p>Rôle (si admin) : <?= $_SESSION['role']?></p>
</body>
</html>
