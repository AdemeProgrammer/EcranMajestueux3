<?php
class Reservations
{
    private $id_reservation;

    /**
     * @return mixed
     */
    public function getIdReservation()
    {
        return $this->id_reservation;
    }

    /**
     * @param mixed $id_reservation
     */
    public function setIdReservation($id_reservation)
    {
        $this->id_reservation = $id_reservation;
    }
    private $nb_place_reservee;

    /**
     * @return mixed
     */
    public function getNbPlaceReservee()
    {
        return $this->nb_place_reservee;
    }

    /**
     * @param mixed $nb_place_reservee
     */
    public function setNbPlaceReservee($nb_place_reservee)
    {
        $this->nb_place_reservee = $nb_place_reservee;
    }
    private $ref_utilisateur;

    /**
     * @return mixed
     */
    public function getRefUtilisateur()
    {
        return $this->ref_utilisateur;
    }

    /**
     * @param mixed $ref_utilisateur
     */
    public function setRefUtilisateur($ref_utilisateur)
    {
        $this->ref_utilisateur = $ref_utilisateur;
    }
    private $ref_sceance;

    /**
     * @return mixed
     */
    public function getRefSceance()
    {
        return $this->ref_sceance;
    }

    /**
     * @param mixed $ref_sceance
     */
    public function setRefSceance($ref_sceance)
    {
        $this->ref_sceance = $ref_sceance;
    }
    public function __construct(array $donnee){
        $this->hydrate($donnee);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $valeur)
        {
            $methode = 'set'.ucfirst($key);

            if (method_exists($this, $methode))
            {
                $this->$methode($valeur);
            }
        }
    }
}