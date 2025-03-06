<?php

class Sceances
{
    private $id_sceance;

    /**
     * @return mixed
     */
    public function getIdSceance()
    {
        return $this->id_sceance;
    }

    /**
     * @param mixed $id_sceance
     */
    public function setIdSceance($id_sceance)
    {
        $this->id_sceance = $id_sceance;
    }
    private $date;

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    private $heure;

    /**
     * @return mixed
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @param mixed $heure
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    }
    private $salle;

    /**
     * @return mixed
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * @param mixed $salle
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }
    private $nb_place_dispo;

    /**
     * @return mixed
     */
    public function getNbPlaceDispo()
    {
        return $this->nb_place_dispo;
    }

    /**
     * @param mixed $nb_place_dispo
     */
    public function setNbPlaceDispo($nb_place_dispo)
    {
        $this->nb_place_dispo = $nb_place_dispo;
    }
    private $ref_film;

    /**
     * @return mixed
     */
    public function getRefFilm()
    {
        return $this->ref_film;
    }

    /**
     * @param mixed $ref_film
     */
    public function setRefFilm($ref_film)
    {
        $this->ref_film = $ref_film;
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