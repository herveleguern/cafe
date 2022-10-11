<?php
require 'Conso.php';
require 'Facture.php';
require 'Table.php';

//jeu d'essai voir poly sql
//les consommations
$conso100=new Conso(100,'Café',1.1);
$conso102=new Conso(102,'Café crème',2);                              
$conso105=new Conso(105,'Chocolat',3.5);
$conso106=new Conso(106,'Bière pression',2.8);
$conso107=new Conso(107,'Bière 25cl',3.2); 
$conso108=new Conso(108,'Bière 33cl',4.1); 
$conso110=new Conso(110,'Bière 50cl',6);
$conso120=new Conso(120,'Jus de fruits',2.1);
$conso121=new Conso(121,'Jus de fruit pressé',3.5);
$conso122=new Conso(122,'Perrier',2.5);
$conso124=new Conso(124,'Orangina',2.8); 
$conso130=new Conso(130,'Coca Cola',2.8);                                  
$conso101=new Conso(101,'Café double',2);
//les tables
$table1=new Table(1,'entree-gche',6);                              
$table2=new Table(2,'entree-dte',10);                              
$table3=new Table(3,'fenetre1',3); 
$table4=new Table(4,'fenetre2',8); 
$table5=new Table(5,'fenetre3',4); 
$table6=new Table(6,'fond-gche',4);
$table7=new Table(7,'fond-drt',2); 
//les factures
$facture1204=new Facture(1204,'22/02/2012',$table4);
$facture1205=new Facture(1205,'22/08/2011',$table1);
//les consommations des factures
$facture1204->ajouterConso($conso122,4);//4 Perrier=>4 x 2.5= 10 euros
$facture1204->ajouterConso($conso124,2);//2 Orangina=>2 x 2.8 = 5.60 euros 
$facture1205->ajouterConso($conso100,2);//2 Café =>2 x 1.1= 2.20 euros

//CODER LES METHODES DE LA CLASSE Facture

var_dump($facture1204->getLigneFact());             //tableau de 2 lignes
var_dump($facture1204->getNomTable());              //fenetre2
var_dump($facture1204->montant());                  //15.60
var_dump($facture1205->montant());                  //2.20
var_dump($facture1204->consoPresente("Perrier"));   //TRUE
var_dump($facture1205->consoPresente("Perrier"));   //FALSE

?>