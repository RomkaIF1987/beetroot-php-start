<?php
function dd($arg)
{
    echo '<pre>';
    var_dump($arg);
    echo '</pre>';
    die();
}

function view($name, $variables = [])
{
    extract($variables);
    require 'views/' . $name . '.view.php';
}

function redirect($location)
{
    header("Location: $location");

}