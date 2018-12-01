<?php require 'partials/header.view.php';?>

<ul>
    <?php foreach ($clients as $client) : ?>
        <li><?= $client->getFullName() ?></li>
        <br>
    <?php endforeach; ?>
</ul>
<?php require 'partials/footer.view.php';?>



