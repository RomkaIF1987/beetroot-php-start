<?php

$result = $app['database']->insert('clients',['name' => $_POST['name']]);

if ($result){
    header('Location: /');
}
else {
    echo 'Query exeption';
}

