<?php

class FilmsRepository
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Bdd();
    }

    public function ajoutFilms(Films $films)
    {
        $sql = "INSERT INTO films(titre,description,genre,duree,affiche) VALUES (:titre,:description,:genre,:duree, :affiche)";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array(
            'titre' => $films->getTitre(),
            'description' => $films->getDescription(),
            'genre' => $films->getGenre(),
            'duree' => $films->getDuree(),
            'affiche' => $films->getAffiche()
        ));
        if ($res == true) {
            return true;
        } else {
            return false;
        }

    }

    public function modifFilms(Films $films)
    {
        $sql = "INSERT INTO films(titre,description,genre,duree,affiche) VALUES (:titre,:description,:genre,:duree, :affiche)";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array(
            'titre' => $films->getTitre(),
            'description' => $films->getDescription(),
            'genre' => $films->getGenre(),
            'duree' => $films->getDuree(),
            'affiche' => $films->getAffiche()
        ));
        if ($res == true) {
            return true;
        } else {
            return false;
        }
    }

    public function suppFilms(Films $films)
    {
        $sql = "DELETE FROM films WHERE id = :id";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute([
                "id" => $films->getIdFilm()
            ]
        );
    }


public function catalogueFilms()
{
        $sql = "SELECT * FROM films";
        $req = $this->bdd->getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC); // Retourne un tableau de films

}
}

