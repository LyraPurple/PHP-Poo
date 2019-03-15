<?php

class Rectangle extends Form
{
    private largeur;
    private longueur;
    // Prérimètre d'un rectangle    
    // périmètre d'un rectangle = ( largeur + longueur )× 2
    public function __construct($largeur_param, $longueur_param)
    {
        $this->largeur = $longueur_param;
        $this->longueur = $longueur_param;
    }
    public function perimeter()
    {
        return ($this->largeur + $this->longueur)*2;
    }
    // Air d'une rectangle
    public function air()
    {
        return $this->largeur * $this->longueur;
    }
}