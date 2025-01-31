<?php
require_once '../vendor/Film.php';

if(empty($_POST['titre'])||empty($_POST["annee"])||empty($_POST["resume"])){
    echo "Veuillez remplir tous les champs";
    header("Location: ../vue/ajoutFilm.html");
}else{
    $film = new Film([])
}