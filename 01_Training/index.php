<?php 

/*  -------Adresse de le site -------
    http://localhost/php_poo/01_Training
    -------Adresse de le site ------- */
require_once 'Cat.php';
$bianca = new Cat();
$Mina = new Cat();


$cat = new Cat();
// On peut affecter une valeur aux propriétés
$cat->name = 'Bianca';
$cat->type = 'Chat de gouttière';
$cat->fur = 'blanc';

// On peut afficher la valeur d'une propriété
echo 'Mon chat s\'appelle ' . $cat->name . ' et il fait ' . $bianca->cry();
