<?php

class Database
{
    private static $var_instance_pdo;

    public static function getInstance()
    {
        if (null === self::$var_instance_pdo) { // On s'assure que la connexion à la BDD se fait une seule fois
            self::$var_instance_pdo = new PDO('mysql:host=127.0.0.1;dbname=08;charset=utf8', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }

        return self::$var_instance_pdo;
    }
}
