<?php
class Bdd {
    private $nomBDD = 'ecranmajestueux';
    private $serveur = 'localhost';
    private $user= 'root';
    private $password = '';
    private $bdd;
    public function __construct()
    {
        $this->bdd = new PDO("mysql:dbname=".$this->nomBDD.";host=".$this->serveur, $this->user, $this->password);
    }

    public function getBdd(){
        return $this->bdd;
    }
}