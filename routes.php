<?php

/** @var $router Router */

$router->get('','controllers/index.php');
$router->get('about','controllers/about.php');
$router->get('about-culture','controllers/about-culture.php');
$router->get('contact','controllers/contact.php');
$router->get('ask-name','controllers/ask-name.php');
$router->post('save-name','controllers/save-name.php');