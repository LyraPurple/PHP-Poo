<?php

require_once __DIR__ . '/../config/autoload.php';

$uri = $_SERVER['PATH_INFO'] ?? '/';

// On teste si on est sur la page d'accueil
if ($uri === '/') {
    require_once __DIR__ . '/../views/home.php';
}

if ($uri === "/acteurs") {
    require_once __DIR__ . '/../views/actors.php';
}