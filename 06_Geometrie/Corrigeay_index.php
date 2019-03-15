<?php

require_once 'Rectangle.php';
require_once 'Carre.php';
require_once 'Cercle.php';
require_once 'Form.php';

$rectangle = new Rectangle(5, 10);
$Carre = new Carre(5); // Un carré étend la classe rectangle
$Cercle = new Cercle(5); // L'argument est le rayon du cercle

echo $rectangle->aire() . ' cm2<br />'; // Affiche 50
echo $rectangle->perimetre() . ' cm2<br />'; // Affiche 30

echo $Carre->aire() . '<br />'; // Affiche 25
echo $Carre->perimetre() . '<br />'; // Affiche 20

echo $Cercle->aire() . '<br />'; // Affiche 78.54
echo $Cercle->perimetre() . '<br />'; // Affiche 31.42

// On veut créer une forme (polygone) quelconque
$form = new Form();
$form
    ->add($rectangle) // On ajoute le rectange dans la forme
    ->add($Carre) // On ajoute le carré dans la forme
    ->add($Cercle) // On ajoute le cercle dans la forme
    ->add(new Cercle(6)) // On ajoute un autre cercle dans la forme
;

echo $form->aire() . '<br />'; // Affiche 153.54 (Aire totale de toutes les formes)
echo $form->perimetre() . '<br />'; // Affiche 81.42 (Périmètre de toutes les formes)
