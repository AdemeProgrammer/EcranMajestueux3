<?php
require_once '../bdd/Bdd.php';
require_once '../../vue/ConnexionEM.php';
require_once '../modele/Utilisateurs.php';
require_once '../Repository/UtilisateursRepository.php';

if(empty($_POST["email"]) ||
    empty($_POST["mot_de_passe"])){

    echo "C'est pas bien ...";
    header("Location: ../../vue/ConnexionEM.php");
}else{
    $utilisateurs = new Utilisateurs([
        'email' =>$_POST["email"],
        'motDePasse' => $_POST["mot_de_passe"],
    ]);
    $UtilisateursRepository = new UtilisateursRepository();
    $resultat = $UtilisateursRepository->connexionUtilisateurs($utilisateurs);
    if ($resultat){
        session_start();
        $_SESSION['email'] = $utilisateurs->getEmail();
        $_SESSION['motDePasse'] = $utilisateurs->getMotDePasse();
        header("location:../../vue/AccueilEM.php");
    }
    else{
        session_destroy();
        header("location:../../vue/ConnexionEM.php");
    }

}