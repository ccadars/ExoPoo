<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Guerrier
 *
 * @author lunel10
 */
//On définit la classe Guerrier qui hérite de Stats et où l'interface iClasse est 
//implémenté pour que ses méthodes puisse manipuler l'objet
class Guerrier extends Stats implements iClasse {
  //On redéfinit la méthode du constructeur
  public function __construct() {
    $this->nom = "Guerrier";
  }
  //On définit la fonction attaquer qui retourne attaque
  public function attaquer() {
    echo " attaque";
  }
}
