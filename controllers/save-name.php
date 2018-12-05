<?php

$newName = $_POST['name'];
$newName = Verification::cleanInput($newName);
if (!empty($newName)) {
    if (Verification::checkLength($newName, 2, 20)) {
    } else {
        echo "Введені некоректні дані <p><a href='ask-name'>ПОВЕРНУТИСЯ НАЗАД</a></p>";
        return false;
    }
} else {
    echo "Заповніть пусті поля <p><a href='ask-name'>ПОВЕРНУТИСЯ НАЗАД</a></p>";
    return false;
}

$result = $app['database']->insert('clients', ['name' => $newName]);

if ($result) {
    header('Location: /');
} else {
    echo 'Query exeption';
}

