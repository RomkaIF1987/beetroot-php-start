<?php
/** @var $router Router */
$router->get('','Users@index');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');
//$router->get('ask-name','controllers/ask-name.php');
//
//$router->post('save-name','controllers/save-name.php');
