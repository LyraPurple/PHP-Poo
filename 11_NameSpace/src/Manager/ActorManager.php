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
}
