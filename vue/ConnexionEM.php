<?php
session_start();
session_destroy();
if (isset($_POST['mot_de_passe'])){
    $bdd = new PDO('mysql:host=localhost;dbname=ecranmajestueux', 'root', '');

    $req = $bdd -> prepare('SELECT * FROM utilisateurs WHERE email = :email AND mot_de_passe = :mot_de_passe');
    $req -> execute(array(
        'email' => $_POST['email'],
        'mot_de_passe' => $_POST['mot_de_passe']
    ));
    $connexion = $req -> fetch();
    session_start();
    $_SESSION['email'] = $connexion['email'];
    $_SESSION['id_utilisateur'] = $connexion['id_utilisateur'];
    if ($connexion ['email'] == $_POST['email'] && $connexion['mot_de_passe'] == $_POST['mot_de_passe']){
        header("location:AccueilEM.php");
    }
    else{
        session_destroy();
        header("location:ConnexionEM.php");
    }
}
?>
<html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link href="../assets/css/InscrptionConnexionEM.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<hr>
<h1>Connexion</h1>
<hr>
<form action ="ConnexionEM.php" method="post">
    <p>Entrer un e-mail</p>
    <input type = "email" name = "email">
    <p>Entrer votre mot de passe :</p>
    <input type="password" name="mot_de_passe">
    <input type = "submit" name ="validation">
</form>
<a href ="InscriptionEM.php"><p>Vous n'êtes pas un membre majestueux ?</p></a>
</body>
</html>

