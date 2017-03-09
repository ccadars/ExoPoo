<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

//Require lie les différents fichiers à Index
require("iClasse.php");
require("iRace.php");
require("Stats.php");
require("Orc.php");
require("Guerrier.php");
require("Archer.php");
require("Personnage.php");

//Création du Personnage instancié perso1, il a pour paramètres un nom, une
//race et une classe
$perso1 = new Personnage("Bob", new Orc(), new Guerrier());
echo $perso1->getNom();
echo $perso1->race->getNom();
echo $perso1->classe->getNom();
$perso1->attaquer();
$perso1->seDeplacer();
// Création du perso 2 
$perso2 = new Personnage("Bill", new Orc(), new Archer());
$perso2->attaquer();
