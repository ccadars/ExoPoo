<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Stats
 *
 * @author lunel10
 */
//On définit une classe abstraite Stats qui ne peut pas être instancié mais 
//dont les propriétés peuvent être appelé par héritage d'objet
abstract class Stats {
  //On définit des variables protégées qui ne peuvent être utilisé que dans
  //cette classe ou dans les objets qui en héritent
  protected $nom = "test";
  protected $pdv = 0;
  protected $atk = 0;
  protected $def = 0;
    public function getNom(){
      return $this->nom;
    }
    public function setNom($nom){
      $this->nom = $nom;
    }
}
