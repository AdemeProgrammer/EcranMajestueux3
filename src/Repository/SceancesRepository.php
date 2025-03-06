<?php

class SceancesRepository{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Bdd();
    }

    public function ajoutSceance(Sceances $sceances)
    {
        $sql = "INSERT INTO sceances(date,heure,salle,nb_place_dispo,ref_film) VALUES (:date,:heure,:salle,:nb_place_dispo,:ref_film)";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array(
            'date' => $sceances->getDate(),
            'heure' => $sceances->getHeure(),
            'salle' => $sceances->getSalle(),
            'nb_place_dispo' => $sceances->getNbPlaceDispo(),
            'ref_film' => $sceances->getRefFilm()
        ));
        if ($res == true) {
            return true;
        } else {
            return false;
        }

    }

}
