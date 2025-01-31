<?php

class ReservationsRepository{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Bdd();
    }

}
