<?php
class Table{
    private $numTable;
    private $nomTable;
    private $nbPlaces;

    public function __construct($numTable,$nomTable,$nbPlaces)
    {
        $this->numTable=$numTable;
        $this->nomTable=$nomTable;
        $this->nbPlaces=$nbPlaces;
    }
    
    public function getNomTable(){
        return $this->nomTable;
    }
}
?>