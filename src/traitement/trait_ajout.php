<?php

use modele\Utilisateurs;

require_once '../bdd/Bdd.php';
require_once '../../vue/InscriptionEM.php';
require_once '../modele/Utilisateurs.php';
require_once '../Repository/UtilisateursRepository.php';

if(empty($_POST["nom"]) ||
    empty($_POST["prenom"]) ||
    empty($_POST["email"]) ||
    empty($_POST["mot_de_passe"])){

    echo "C'est pas bien ...";
    header("Location: ../../vue/InscriptionEM.php");
}else{
    $utilisateurs = new Utilisateurs([
        'nom' => $_POST['nom'],
        'prenom' => $_POST["prenom"],
        'email' =>$_POST["email"],
        'mot_de_passe' => $_POST["mot_de_passe"],
        'role' => 'Client',
    ]);
    $UtilisateursRepository = new UtilisateursRepository();
    $resultat = $UtilisateursRepository->ajoutUtilisateurs($utilisateurs);

    if($resultat == true){
        header("Location: ../../vue/Connexion.php");
    }else{
        header("Location: ../../vue/Inscription.php");
    }

}