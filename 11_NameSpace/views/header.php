<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<!-- Récupérer le lien en dynamique, mettre l'url dans notre href -->
<?php 
    // var_dump($_SERVEUR);
    $scheme = $_SERVER['REQUEST_SCHEME']; //http
    $host = $_SERVER['SERVEUR_NAME']; //localhost
    $path = $_SERVER['SCRIPT_NAME']; //poo/11-movies/public/index.php
    $baseUrl = $scheme . '://' .$host  .$path;
?>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="<?= $baseUrl ?>/">Accueil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $baseUrl ?>/acteurs">Acteurs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $baseUrl ?>/acteurs/ajouter">Ajouter un acteurs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $baseUrl ?>/films/ajouter">Ajouter un film</a>
  </li>
</ul>

<div class="container">

