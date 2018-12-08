<?php

namespace App\Controllers;

use Core\App;
use Core\Database\Verification;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users', 'User');


        view('index', [
            'users' => $users
        ]);
    }

    public function store()
    {
        $newName = $_POST['name'];

        $newName = Verification::cleanInput($newName);
        $newName = Verification::inputAudit($newName);

        $result = App::get('database')->insert('users', ['name' => $newName]);

        if ($result) {
            redirect('users');
        } else {
            echo 'Query exeption';
        }
    }
}
