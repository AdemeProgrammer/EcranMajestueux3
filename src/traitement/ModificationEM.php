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
    header('Location: ../vue/ConnexionEM.html');

}

?>

