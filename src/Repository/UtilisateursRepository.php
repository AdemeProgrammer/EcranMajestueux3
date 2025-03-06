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

    public function connexionUtilisateurs(Utilisateurs $utilisateurs) {
        $sql = "SELECT * FROM utilisateurs WHERE email = :email";
        $req = $this->bdd->getBdd()->prepare($sql);
        $req->execute(array(
            'email' => $utilisateurs->getEmail()
        ));

        $res = $req->fetch();

        if ($res) {
            if (password_verify($utilisateurs->getMotDePasse(), $res['mot_de_passe'])) {
                $utilisateurs->setIdUtilisateur($res['id_utilisateur']);
                $utilisateurs->setNom($res['nom']);
                $utilisateurs->setPrenom($res['prenom']);
                $utilisateurs->setEmail($res['email']);
                $utilisateurs->setRole($res['role']);

                return true;
            }
        }

        return false;
    }
    public function modifUtilisateurs(Utilisateurs $utilisateurs){
        $sql = "INSERT INTO utilisateurs(nom,prenom,mot_de_passe) VALUES (:nom,:prenom,:mot_de_passe)";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute(array(
            'nom' => $utilisateurs->getNom(),
            'prenom' => $utilisateurs->getPrenom(),
            'mot_de_passe' => $utilisateurs->getMotDePasse()
        ));
        if($res == true){
            return true;
        }else{
            return false;
        }
    }
    public function suppUtilisateurs(Utilisateurs $utilisateurs){
        $sql = "DELETE FROM utilisateurs WHERE email = :email";
        $req = $this->bdd->getBdd()->prepare($sql);
        $res = $req->execute([
            'email' => $utilisateurs->getEmail()
            ]
        );
    }
}
