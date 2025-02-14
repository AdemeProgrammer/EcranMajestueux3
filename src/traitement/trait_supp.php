<?php

require_once '../bdd/Bdd.php';
require_once '../../vue/SupressionEM.php';
require_once '../modele/Utilisateurs.php';
require_once '../Repository/UtilisateursRepository.php';

$utilisateurs = Utilisateurs(['nom' => $_POST['nom'],
    'prenom' => $_POST["prenom"],
    'email' =>$_POST["email"],
    'motDePasse' => $_POST["mot_de_passe"]]);

$resultat = $utilisateurs->suppUtilisateurs($utilisateurs);

if($resultat == true){
    header("Location: ../../vue/ConnexionEM.php");
}