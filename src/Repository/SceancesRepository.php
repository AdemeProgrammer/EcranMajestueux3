<?php

class SceancesRepository{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Bdd();
    }

    public function ajoutSceance(Sceances $sceance)
    {
        $sql = "INSERT INTO films(date,heure,salle,nb_place_dispo,ref_film) VALUES (:date,:heure,:salle,:nb_place_dispo,:ref_film)";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array(
            'date' => $sceance->getDate(),
            'heure' => $sceance->getHeure(),
            'salle' => $sceance->getSalle(),
            'nb_place_dispo' => $sceance->getNbPlaceDispo(),
            'ref_film' => $sceance->getRefFilm()
        ));
        if ($res == true) {
            return true;
        } else {
            return false;
        }

    }

}
