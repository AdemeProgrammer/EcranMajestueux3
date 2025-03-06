<?php
require_once '../bdd/Bdd.php';
require_once  '../../vue/SceanceEM.php';
require_once '../modele/Sceances.php';
require_once '../Repository/SceancesRepository.php';

if(empty($_POST["date"]) ||
    empty($_POST["heure"]) ||
    empty($_POST["salle"]) ||
    empty($_POST["nb_place_dispo"]) ||
    empty($_POST["ref_film"])){

    echo "C'est pas bien ...";
    header("Location: ../../vue/Sceance.php");
}else{
    $sceance = new Sceances([
        'date' => $_POST['date'],
        'heure' => $_POST["heure"],
        'salle' =>$_POST["salle"],
        'nbPlaceDispo' => $_POST["nb_place_dispo"],
        'refFilm' => $_POST["ref_film"],
    ]);
    $SceancesRepository = new SceancesRepository();
    $resultat = $SceancesRepository->ajoutSceance($sceance);

    if($resultat == true){
        header("Location: ../../vue/AccueilEM.php");
    }else{
        header("Location: ../../vue/AjoutFilmEM.php");
    }

}