<?php
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
        header("location:../vue/ConnexionEM.html");
    }
}
?>

