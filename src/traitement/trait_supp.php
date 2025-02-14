<?php

require_once '../bdd/Bdd.php';
require_once '../../vue/SupressionEM.php';
require_once '../modele/Utilisateurs.php';
require_once '../Repository/UtilisateursRepository.php';
session_start();
$utilisateurs = new Utilisateurs([
    "email" => $_SESSION['email'],
]);
$utilisateurRepository = new UtilisateursRepository();

$resultat = $utilisateurRepository->suppUtilisateurs($utilisateurs);

if($resultat){
    header("Location: ../../vue/ConnexionEM.php");
}