<?php

use Core\App;
use Core\Database\QueryBuilder;
use Core\Database\Connection;

App::bind('config', require 'app/config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));



