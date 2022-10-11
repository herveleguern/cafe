<?php
class Facture
{
    private $numFact;
    private $dateFact;
    private $ligneFact = array();     //tableau des lignes de facture (objet Conso et sa qte)
    private $laTable;               //objet Table   

    public function __construct($numFact, $dateFact, $laTable)
    {
        $this->numFact = $numFact;
        $this->dateFact = $dateFact;
        $this->laTable = $laTable;
    }

    public function ajouterConso(Conso $uneConso, $qte)
    {
        $this->ligneFact[] = array($uneConso, $qte);
    }

    public function getLigneFact()
    {
        return $this->ligneFact;
    }

    
}
