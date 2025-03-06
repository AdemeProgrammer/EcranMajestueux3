<?php

class SceancesRepository{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Bdd();
    }

}
