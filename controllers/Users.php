<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 07.12.18
 * Time: 19:29
 */

class Users
{
    public function index()
    {
        $clients = App::get('database')->selectAll('users', 'User');


        require 'views/index.view.php';
    }
}