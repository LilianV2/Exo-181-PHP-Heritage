<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";

// Creation d'une instance de la classe personnage
$humain = new personnage();
$humain->setNom("Lilian");
echo $humain->getVie() . "<br>";

// Creation d'une instance de la classe dragon
$dragon = new dragon();
$dragon->setNom("dragon"); // nommé le dragon pour savoir afficher le reste du code
echo $dragon->getVie() . "<br>";

//test pour Princesse.php
$princesse = new Princesse();

if ($princesse->isSaved() === false){
    echo $princesse->isSaved(); // retourne rien
}else{
    echo "vivante";
}

