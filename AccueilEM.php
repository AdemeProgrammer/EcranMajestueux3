<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: CoonexionEM.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="AccueilEM.css" rel="stylesheet">
</head>
<body>
<hr>
<h1>Accueil de : <?= $_SESSION['email']?></h1>
<hr>
<p>Bienvenue sur le Ragna Verse cher chasseur de dragon !</p>
<p>Sur ce site, vous pourrez retrouver de nombreuses informations sur l'oeuvre Ragna Crimson et vous pourrez même commander les tomes officiels.</p>
<p>Bla bla bla...</p>

<hr>
<a href ="InscriptionEM.php"><p>Revenir à l'inscription</p></a>
<a href ="ConnexionEM.php"><p>Revenir à la connexion</p></a>
<br>
<h1>Paramètre de compte :</h1>
<a href="DeconnexionEM.php"><p>Deconnexion du compte</p></a>
<a href="ModificationEM.php"><p>Modifier le compte</p></a>
<a href="SupressionEM.php"><p>Supression du compte</p></a>
<hr>
</body>
</html>