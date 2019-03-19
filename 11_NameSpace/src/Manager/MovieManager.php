<?php

namespace Manager;

/**
 * Cette classe me permet de gérer les films.
 */
class MovieManager
{
    /**
     * Cette méthode permet de récupérer tous les films.
     */
    public function findAll()
    {
        return \Database::getInstance()->query('SELECT * FROM movie')->fetchAll(\PDO::FETCH_CLASS, \Entity\Movie::class);
    }
}
