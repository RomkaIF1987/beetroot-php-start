<?php

require 'Client.php';


$clients = $app['database']->selectAll('clients', 'Client');

require 'views/index.view.php';