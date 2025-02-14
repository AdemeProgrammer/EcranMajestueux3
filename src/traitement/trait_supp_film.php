<?php
require_once '../bdd/Bdd.php';
require_once '../../vue/AccueilEM.php';
require_once '../modele/Films.php';
require_once '../Repository/FilmsRepository.php';

$films = new Films([
    "idFilms" => $_POST[''],
]);
$FilmsRepository = new FilmsRepository();

$resultat = $FilmsRepository->suppFilms($films);

if($resultat){
    header("Location: ../../vue/AccueilEM.php");
}