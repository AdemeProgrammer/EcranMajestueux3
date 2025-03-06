<?php
session_start();

require_once '../bdd/Bdd.php';

if (isset($_POST['id_utilisateur'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['role'])) {
    $id_utilisateur = $_POST['id_utilisateur'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $bdd = new Bdd();
    $resultat = $bdd->getBdd();

    $sql = "UPDATE utilisateurs SET nom = :nom, prenom = :prenom, email = :email, role = :role WHERE id_utilisateur = :id_utilisateur";

    $req = $resultat->prepare($sql);

    $res = $req->execute([
        'id_utilisateur' => $id_utilisateur,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'role' => $role
    ]);

    if ($res) {
        header("Location:AccueilEM.php");
        exit();
    } else {
        echo "Erreur lors de la mise à jour des informations de l'utilisateur.";
    }
} else {
    echo "Veuillez remplir tous les champs.";
}
?>
