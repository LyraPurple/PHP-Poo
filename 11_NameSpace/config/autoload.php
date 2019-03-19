<?php

/**
 * Cette fonction s'occupe de charger automatiquement nos classes PHP
 */
spl_autoload_register(function ($class) {
    // Fix bug on macOS or Linux
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require __DIR__ . '/../src/' . $class . '.php';
});
