<?php

require 'User.php';


$clients = App::get('database')->selectAll('users', 'User');


require 'views/index.view.php';