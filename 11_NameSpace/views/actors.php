<?php

require_once __DIR__ . '/header.php';

echo '<h1>Acteurs</h1>';

/**
 * Récupérer les acteurs en bases de données et les afficher sur la page sous forme de tableau HTML.
 */

$actorManager = new Manager\ActorManager();
$actors = $actorManager->findAll();
?>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Âge</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($actors as $actor) { ?>
            <tr>
                <td><?= $actor->getFullName(); ?></td>
                <td><?= $actor->getAge(); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/footer.php';
