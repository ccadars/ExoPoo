<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of iRace
 *
 * @author lunel10
 */
//C'est une interface qui s'implémente dans un autre objet pour manipuler celui-ci
// grâce à la méthode seDéplacer
  interface iRace {
    public function seDeplacer($distance);
  }
