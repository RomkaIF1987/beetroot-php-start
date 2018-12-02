<?php
$newName = $_POST['name'];
$app['database']->insertName('clients',$newName);

if ($newName === false){
    echo 'Not string';
}




//добавити в базу даних те що приходить з форми
//створити запит в qerybuilder все решту тут