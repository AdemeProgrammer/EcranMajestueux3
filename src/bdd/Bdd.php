<?php
class Bdd {
    private $nomBDD = 'ecranmajestueux';
    private $serveur = 'localhost';
    private $user= 'root';
    private $password = '';
    private $bdd;

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getServeur(): string
    {
        return $this->serveur;
    }

    /**
     * @param string $serveur
     */
    public function setServeur(string $serveur)
    {
        $this->serveur = $serveur;
    }

    /**
     * @return string
     */
    public function getNomBDD(): string
    {
        return $this->nomBDD;
    }

    /**
     * @param string $nomBDD
     */
    public function setNomBDD(string $nomBDD)
    {
        $this->nomBDD = $nomBDD;
    }
    public function __construct()
    {
        $this->bdd = new PDO("mysql:dbname=".$this->nomBDD.";host=".$this->serveur, $this->user, $this->password);
    }

    public function getBdd(){
        return $this->bdd;
    }
}