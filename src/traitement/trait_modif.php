<?php

use modele\Utilisateurs;

require_once '../bdd/Bdd.php';
require_once '../modele/Utilisateurs.php';
require_once '../Repository/UtilisateursRepository.php';

if(empty($_POST["nom"]) ||
    empty($_POST["prenom"]) ||
    empty($_POST["mot_de_passe"])
){

    header("Location: ../../vue/Connexion.php");
}else{
    $utilisateurs = new Utilisateurs();
    $utilisateurs->setNom($_POST["nom"]);
    $utilisateurs->setPrenom($_POST["prenom"]);
    $utilisateurs->setMotDePasse($_POST["mot_de_passe"]);

    $utilisateursRepository = new UtilisateursRepository();
    $resultat = $utilisateursRepository->modifUtilisateurs($utilisateurs);

    if($resultat == true){
        header("Location: ../vue/ConnexionEM.php");
    }else{
        header("Location: ../vue/Modification.php");
    }

}
