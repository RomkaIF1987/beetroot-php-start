<?php

$newName = $_POST['name'];
$newName = Verification::cleanInput($newName);
if (!empty($newName)) {
    if (Verification::checkLength($newName, 2, 20)) {
    } else {
        echo "<h1 style='color: red'>Введені некоректні дані</h1> <p><a href='ask-name'>ПОВЕРНУТИСЯ НАЗАД</a></p>";
        return false;
    }
} else {
    echo "<h1 style='color: red'>Заповніть пусті поля</h1> <p><a href='ask-name'>ПОВЕРНУТИСЯ НАЗАД</a></p>";
    return false;
}

$result = $app['database']->insert('users', ['name' => $newName]);

if ($result) {
    header('Location: /');
} else {
    echo 'Query exeption';
}

