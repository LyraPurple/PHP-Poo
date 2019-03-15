<?php

/**
 * Cette classe permet de construire une forme.
 */
class Form 
{
    /**
     * La forme va stocker plusieurs formes dans un tableau.
     */
    protected $forms = [];

    /**
     * Cette méthode permet d'ajouter une nouvelle forme dans le tableau.
     */
    public function add($form)
    {
        $this->forms[] = $form;

        return $this;   /*  Permay d'enchaînay lay appels ()->()->()->(); */
    }

    /**
     * L'aire d'une forme quelconque est l'addition des aires de toutes les formes présentes dans son tableau.
     */
    public function aire()
    {
        $aire = 0;
        foreach ($this->forms as $form) {
            $aire += $form->aire();
        }

        return $aire;
    }

    public function perimetre()
    {
        $perimetre = 0;
        foreach ($this->forms as $form) {
            $perimetre += $form->perimetre();
        }

        return $perimetre;
    }
}
