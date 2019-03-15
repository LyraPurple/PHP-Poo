<?php

class Circle extends Form
// http://php.net/manual/fr/ref.math.php
{
    private rayon;
    public function __construct($rayong_param)
    {
        $this->rayon = $rayong_param;
    }
    // Prérimètre d'un cercle
    // 2 x rayon x π
    
    public function perimeter()
    {
        return ($this->rayon * 2 * pi();
    }
    // Air d'une cercle
    // π x rayon2
   
    public function air()
    {
        return $this->rayon ^ 2 * pi();
    }
}