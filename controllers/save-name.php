<?php

$newName = $_POST['name'];
$newName = Request::clean_input($newName);
if (!empty($newName)) {
    if (Request::check_length($newName,2,20)) {
        echo "Дякуємо за повідомлення";
//        echo "$newName";
    } else {
        echo "Введені некоректні дані";
        return false;
    }
} else {
    echo "Заповніть пусті поля";
    return false;
}


$app['database']->insertName('clients', $newName);





//добавити в базу даних те що приходить з форми
//створити запит в qerybuilder все решту тут