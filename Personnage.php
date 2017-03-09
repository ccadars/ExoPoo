<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personnage
 *
 * @author lunel10
 */
//On définit la classe personnage qui hérite de l'objet Stats
class Personnage extends Stats{
  //On définit des variables publique qui peuvent être utilisé en dehors de la
  //classe
  public $nom = null;
  public $race = null;
  public $classe = null;
  //Lorsque le personnage est instancé, il est définit par sa classe, sa race et
  //son nom
  public function __construct($nom, $race, $classe) {
    $this->nom = $nom;
    $this->race = $race;
    $this->classe = $classe;
  }
  public function attaquer() {
    $this->classe->attaquer();
  }
  //On utilise une méthode qui est définie dans l'interface iRace
  public function seDeplacer() {
    $this->race->seDeplacer(2);
  }
}
