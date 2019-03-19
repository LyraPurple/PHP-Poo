<?php

namespace Manager;

/**
 * Cette classe me permet de gérer les acteurs.
 */
class ActorManager
{
    /**
     * Cette méthode permet de récupérer tous les acteurs.
     */
    public function findAll()
    {
        return \Database::getInstance()->query('SELECT * FROM actor')->fetchAll(\PDO::FETCH_CLASS, \Entity\Actor::class);
    }

    /**
     * Cette méthode permet d'ajouter un acteur dans la bdd.
     */
    public function add($actor)
    {
        $sql = 'INSERT INTO `actor` (`lastname`, `firstname`, `birthday`) VALUES (:lastname, :firstname, :birthday)';
        $query = \Database::getInstance()->prepare($sql);

        $query->bindValue(':lastname', $actor->getLastname());
        $query->bindValue(':firstname', $actor->getFirstname());
        $query->bindValue(':birthday', $actor->getBirthday());

        return $query->execute();
    }
}

