<?php

class FilmsRepository {
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Bdd();
    }

    public function ajoutFilms(Films $films){
        $sql = "INSERT INTO films(titre,description,genre,duree,affiche) VALUES (:titre,:description,:genre,:duree, :affiche)";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array(
            'titre' => $films->getTitre(),
            'description' => $films->getDescription(),
            'genre' => $films->getGenre(),
            'duree' => $films->getDuree(),
            'affiche' => $films->getAffiche()
        ));
        if($res == true){
            return true;
        }else{
            return false;
        }

    }
    public function modifFilms(Films $films){
        $sql = "INSERT INTO films(titre,description,genre,duree,affiche) VALUES (:titre,:description,:genre,:duree, :affiche)";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array(
            'titre' => $films->getTitre(),
            'description' => $films->getDescription(),
            'genre' => $films->getGenre(),
            'duree' => $films->getDuree(),
            'affiche' => $films->getAffiche()
        ));
        if($res == true){
            return true;
        }else{
            return false;
        }
    }

    public function suppFilms(Utilisateurs $utilisateurs){
        $sql = "DELETE FROM utilisateurs WHERE id = :id";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute([
                "id" => $utilisateurs->getIdUtilisateur()
            ]
        );
    }

}