<?php

namespace Entity;

/**
 * Cette classe représente un film.
 */
class Movie
{
    private $id;
    private $title;
    private $synopsis;
    private $released_at;
    private $category;



    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getReleasedAt()
    {
        $date = new \DateTime($this->released_at);

        return $date->format('d F Y');
    }

    /**
     * Ajouter un getter pour le synopsis.
     * Si le synopsis est plus long que 15 caractères, on affiche seulement les 15 premiers caractères avec ... 
     */
    public function getSynopsis($truncate = 9)
    {
        $output = $this->synopsis;

        // Si la taille de la chaine est supérieure à $truncate
        if (strlen($output) > $truncate) {
            $output = substr($output, 0, $truncate) . '...';
        }

        return $output;
    }

    /**
     * On passe les données de $_POST dans l'instance d'Movie
     */
    public function hydrate($data)
    {    
        if (empty($data)) { // S'il n'y a pas de data, on hydrate pas
            return;
        }

        var_dump($data);
        var_dump($this);
        
        // On hydrate
        $this->title = trim($data['title']);
        $this->synopsis = trim($data['synopsis']);
        $this->category = trim($data['category']);

        var_dump($this);
    }
    
    /**
     * On vérifie que les données de l'acteur soient valides
     */
    public function isValid()
    {
        $valid = true;

        if (strlen($this->title) < 2) {
            $valid = false;
        }

        if (strlen($this->synopsis) < 2) {
            $valid = false;
        }

        // 2020-12-01
        // On vérifie que la date soit valide
        $date_time = new \DateTime($this->released_at);
        $parseDate = explode('-', $date_time);

        if (count($parseDate) === 3) { // on vérifie qu'on a bien 2020, 12 et 01 dans un tableau
            $day = $parseDate[2];
            $month = $parseDate[1];
            $year = $parseDate[0];
            if (!checkdate($month, $day, $year)) {
                $valid = false;
            }
        } else {
            // Si la date n'est pas composay de 3 nombres
            $valid = false;
        }

        return $valid;
    }
}
