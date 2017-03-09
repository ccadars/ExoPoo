<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Archer
 *
 * @author lunel10
 */
//On définit la classe Archer qui hérite de Stats et où l'interface iClasse est 
//implémenté pour que ses méthodes puisse manipuler l'objet
class Archer extends Stats implements iClasse {
  //On redéfinit la méthode du constructeur
  public function __construct() {
    $this->nom = "Archer";
  }
  //On définit la fonction attaquer qui retourne tirer une flèche
  public function attaquer() {
    echo " tire une flèche";
  }
}
