<?php
require_once '../bdd/Bdd.php';
require_once '../../vue/ReservationEM.php';
require_once '../modele/Reservations.php';
require_once '../Repository/ReservationsRepository.php';

if(empty($_POST["nb_place_reservee"]) ||
    empty($_POST["ref_utilisateur"]) ||
    empty($_POST["ref_sceance"])){

    echo "C'est pas bien ...";
    header("Location: ../../vue/AjoutReservationEM.php");
}else{
    // Création d'un objet Reservations
    $reservation = new Reservations([
        'nb_place_reservee' => $_POST['nb_place_reservee'],
        'ref_utilisateur' => $_POST['ref_utilisateur'],
        'ref_sceance' => $_POST['ref_sceance'],
    ]);

    // Initialisation du repository
    $reservationRepository = new ReservationsRepository();

    // Appel de la méthode d'ajout de réservation
    $resultat = $reservationRepository->ajouterReservation($reservation);

    if($resultat == true){
        header("Location: ../../vue/AccueilEM.php");
    }else{
        header("Location: ../../vue/AjoutReservationEM.php");
    }
}