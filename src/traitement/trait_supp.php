<?php

require_once '../bdd/Bdd.php';
require_once '../../vue/SupressionEM.php';
require_once '../modele/Utilisateurs.php';
require_once '../Repository/UtilisateursRepository.php';

$utilisateurs = Utilisateurs();

$UtilisateursRepository = new UtilisateursRepository();
$resultat = $UtilisateursRepository->suppUtilisateurs($utilisateurs);

if($resultat == true){
    header("Location: ../../vue/ConnexionEM.php");
}