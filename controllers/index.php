<?php

require 'User.php';


$clients = $app['database']->selectAll('users', 'User');


require 'views/index.view.php';