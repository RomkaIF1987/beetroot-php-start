<?php require 'partials/header.view.php';?>
<p><h1>HOME PAGE</h1></p>
<br>
<form action="users" method="POST">
    <input type="text" name="name" placeholder="Введіть своє ім'я">
    <button type="submit" value="SEND">SEND</button>
</form>

<ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user->getFullName() ?></li>
        <br>
    <?php endforeach; ?>
</ul>
<?php require 'partials/footer.view.php';?>



