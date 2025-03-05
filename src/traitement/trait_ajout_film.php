<?php
require_once '../bdd/Bdd.php';
require_once  '../../vue/AjoutFilmEM.php';
require_once '../modele/Films.php';
require_once '../Repository/FilmsRepository.php';




if(empty($_POST["titre"]) ||
    empty($_POST["description"]) ||
    empty($_POST["genre"]) ||
    empty($_POST["duree"]) ||
    empty($_POST["affiche"])){

    echo "C'est pas bien ...";
    header("Location: ../../vue/AjoutFilmEM.php");
}else{
    $films = new Films([
        'titre' => $_POST['titre'],
        'description' => $_POST["description"],
        'genre' =>$_POST["genre"],
        'duree' => $_POST["duree"],
        'affiche' => $_POST["affiche"],
    ]);
    $FilmsRepository = new FilmsRepository();
    $resultat = $FilmsRepository->ajoutFilms($films);

    if($resultat == true){
        header("Location: ../../vue/AccueilEM.php");
    }else{
        header("Location: ../../vue/AjoutFilmEM.php");
    }

}
