<?php

class UtilisateursRepository{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Bdd();
    }
    public function ajoutUtilisateurs(Utilisateurs $utilisateurs){
        $sql = "INSERT INTO utilisateurs(nom,prenom,email,mot_de_passe,role) VALUES (:nom,:prenom,:email,:mot_de_passe,:role)";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array(
            'nom' => $utilisateurs->getNom(),
            'prenom' => $utilisateurs->getPrenom(),
            'email' => $utilisateurs->getEmail(),
            'mot_de_passe' => $utilisateurs->getMotDePasse(),
            'role' => 'Client'
    ));
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

}
