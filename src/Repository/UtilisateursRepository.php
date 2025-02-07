<?php

class UtilisateursRepository{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Bdd();
    }
    public function ajoutUtilisateurs(Utilisateurs $utilisateurs){
        $sql = "INSERT INTO utilisateurs(nom,prenom,email,mot_de_passe) VALUES (:nom,:prenom,:email,:mot_de_passe)";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array(
            'nom' => $utilisateurs->getNom(),
            'prenom' => $utilisateurs->getPrenom(),
            'email' => $utilisateurs->getEmail(),
            'mot_de_passe' => $utilisateurs->getMotDePasse(),
    ));
        if($res == true){
            return true;
        }else{
            return false;
        }

    }

    public function connexionUtilisateurs(Utilisateurs $utilisateurs){
        $sql = "SELECT * FROM utilisateurs WHERE email=:email AND mot_de_passe = :mot_de_passe";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res=$req->execute(array(
            'email' => $utilisateurs->getEmail(),
            'mot_de_passe' => $utilisateurs->getMotDePasse(),
        ));
        $req -> fetch();
        if($res == true){
            return true;
        }else{
            return false;
        }

    }
    public function modifUtilisateurs(Utilisateurs $utilisateurs){
        $sql = "INSERT INTO utilisateurs(nom,prenom,email,mot_de_passe) VALUES (:nom,:prenom,:email,:mot_de_passe)";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array(
            'nom' => $utilisateurs->getNom(),
            'prenom' => $utilisateurs->getPrenom(),
            'email' => $utilisateurs->getEmail(),
            'mot_de_passe' => $utilisateurs->getMotDePasse()
        ));
        if($res == true){
            return true;
        }else{
            return false;
        }

    }

    public function suppUtilisateurs(Utilisateurs $utilisateurs){
        $sql = "DELETE FROM utilisateurs WHERE id = :id";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute([
            "id" => $utilisateurs->getIdUtilisateur()
            ]
        );
    }

}
