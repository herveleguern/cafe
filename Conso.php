<?php
class Conso{
    private $numCons;
    private $libCons;
    private $prixCons;

    public function __construct($numCons,$libCons,$prixCons)
    {
        $this->numCons=$numCons;
        $this->libCons=$libCons;
        $this->prixCons=$prixCons;
    }

    public function getPrixCons()
    {
        return $this->prixCons;
    }

      public function getLibCons()
    {
        return $this->libCons;
    }
}
