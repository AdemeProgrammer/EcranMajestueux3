<?php

use modele\Utilisateurs;

require_once '../bdd/Bdd.php';
require_once '../modele/Utilisateurs.php';
require_once '../Repository/UtilisateursRepository.php';

if(empty($_POST["nom"]) ||
    empty($_POST["prenom"]) ||
    empty($_POST["email"]) ||
    empty($_POST["mot_de_passe"]) ||
    empty($_POST["role"])
){

    echo "C'est pas bien ...";
    header("Location: ../../vue/Connexion.php");
}else{
    $utilisateurs = new Utilisateurs([
        'nom' =>$_POST['titre'],
        'prenom' =>$_POST['prenom'],
        'email' =>$_POST['email'],
        'mot_de_passe' =>$_POST['mot_de_passe'],
        'role' =>$_POST['role']
    ]);
    $utilisateursRepository = new UtilisateursRepository();
    $resultat = $utilisateursRepository->modifUtilisateurs($utilisateurs);

    if($resultat == true){
        header("Location: ../vue/ConnexionEM.php");
    }else{
        header("Location: ../vue/Modification.php");
    }

}
