<?php

class ReservationsRepository
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Bdd();
    }

    /**
     * Ajoute une réservation dans la base de données.
     *
     * @param Reservations $reservation
     * @return bool
     */
    public function ajouterReservation(Reservations $reservation)
    {
        $sql = "INSERT INTO reservations(nb_place_reservee, ref_utilisateur, ref_sceance)
                VALUES (:nb_place_reservee, :ref_utilisateur, :ref_sceance)";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array(
            'nb_place_reservee' => $reservation->getNbPlaceReservee(),
            'ref_utilisateur' => $reservation->getRefUtilisateur(),
            'ref_sceance' => $reservation->getRefSceance(),
        ));

        return $res ? true : false;
    }

    /**
     * Récupère une réservation par son ID.
     *
     * @param int $id_reservation
     * @return array|null
     */
    public function getReservationById($id_reservation)
    {
        $sql = "SELECT * FROM reservations WHERE id_reservation = :id_reservation";
        $req = $this->bdd->getBdd()->prepare($sql);
        $req->execute(array('id_reservation' => $id_reservation));

        return $req->fetch();
    }

    /**
     * Récupère toutes les réservations.
     *
     * @return array
     */
    public function getAllReservations()
    {
        $sql = "SELECT * FROM reservations";
        $req = $this->bdd->getBdd()->query($sql);

        return $req->fetchAll();
    }

    /**
     * Récupère toutes les réservations d'un utilisateur spécifique.
     *
     * @param int $id_utilisateur
     * @return array
     */
    public function getReservationsByUtilisateurId($id_utilisateur)
    {
        $sql = "SELECT * FROM reservations WHERE ref_utilisateur = :ref_utilisateur";
        $req = $this->bdd->getBdd()->prepare($sql);
        $req->execute(array('ref_utilisateur' => $id_utilisateur));

        return $req->fetchAll();
    }

    /**
     * Supprime une réservation en fonction de son ID.
     *
     * @param int $id_reservation
     * @return bool
     */
    public function supprimerReservation($id_reservation)
    {
        $sql = "DELETE FROM reservations WHERE id_reservation = :id_reservation";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array('id_reservation' => $id_reservation));

        return $res ? true : false;
    }

    /**
     * Supprime toutes les réservations d'un utilisateur.
     *
     * @param int $id_utilisateur
     * @return bool
     */
    public function supprimerReservationsByUtilisateur($id_utilisateur)
    {
        $sql = "DELETE FROM reservations WHERE ref_utilisateur = :ref_utilisateur";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array('ref_utilisateur' => $id_utilisateur));

        return $res ? true : false;
    }
}
?>
