<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Orc
 *
 * @author lunel10
 */
//On définit la race Orc qui hérite de Stats et où l'interface iRace est 
//implémenté pour que ses méthodes puisse manipuler l'objet
class Orc extends Stats implements iRace{
  //On redéfinit la méthode du constructeur
  public function __construct() {
    $this->nom = "Orc";
  }
  //On définit la fonction attaquer qui retourne se déplace de. Cette méthode
  //provient de l'interface iRace
  public function seDeplacer($distance) {
    echo " se Déplace de " . $distance;
  }
}
