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

    /**
     * Cette méthode permet d'ajouter un acteur dans la bdd.
     */
    public function add($movie)
    {
        $sql = 'INSERT INTO `movie` (`title`, `synopsis`, `released_at`, `category`) VALUES (:title, :synopsis, :released_at, :category)';
        $query = \Database::getInstance()->prepare($sql);

        $query->bindValue(':synopsis', $movie->getsynopsis());
        $query->bindValue(':released_at', $movie->getreleased_at());        
        $query->bindValue(':synopsis', $movie->getsynopsis());
        $query->bindValue(':category', $movie->category());

        return $query->execute();
    }


}
