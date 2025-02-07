<?php
session_start();
$modification = new PDO('mysql:host=localhost;dbname=ecranmajestueux', 'root', '');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $req = $modification -> prepare('UPDATE utilisateurs SET nom = :nom, prenom = :prenom, mot_de_passe = :mot_de_passe WHERE id = :id');
    $req -> execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'mot_de_passe' => $mot_de_passe
    ));

    echo "Votre compte a bien été modifié !";
    header('Location: ConnexionEM.php');

}

?>
<html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modification</title>
    <link href="../assets/css/ModificationEM.css" rel="stylesheet">
</head>
<body>
<hr>
<h1>Modification du compte de : <?= $_SESSION['email']?></h1>
<hr>

<form action ="ModificationEM.php" method="post">
    <p>Modifier le nom :</p>
    <input type="text" name="nom">
    <p>Modifier le prenom :</p>
    <input type="text" name="prenom">
    <p>Modifier le mot de passe :</p>
    <input type="password" name="mot_de_passe">
    <input type = "submit" name ="validation">
</form>
</body>
</html>

