<?php

class SceancesRepository
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Bdd();
    }

    public function ajoutSceance(Sceances $sceance)
    {
        $sql = "INSERT INTO seances (date, heure, salle, nb_place_dispo, ref_film) 
                VALUES (:date, :heure, :salle, :nb_place_dispo, :ref_film)";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array(
            'date' => $sceance->getDate(),
            'heure' => $sceance->getHeure(),
            'salle' => $sceance->getSalle(),
            'nb_place_dispo' => $sceance->getNbPlaceDispo(),
            'ref_film' => $sceance->getRefFilm()
        ));
        return $res;
    }

    public function seancesFilmId($filmId)
    {
        // Récupérer toutes les séances pour ce film
        $sql = "SELECT * FROM sceances WHERE ref_film = :filmId"; // Pas de LIMIT pour toutes les séances
        $req = $this->bdd->getBdd()->prepare($sql);
        $req->execute(['filmId' => $filmId]);
        return $req->fetchAll(PDO::FETCH_ASSOC); // Retourne un tableau de toutes les séances
    }
}
