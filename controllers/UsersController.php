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
        if (!empty($newName)) {
            if (Verification::checkLength($newName, 2, 20)) {
            } else {
                echo "<h1 style='color: red'>Введені некоректні дані</h1> <p><a href='/users'>ПОВЕРНУТИСЯ НАЗАД</a></p>";
                return false;
            }
        } else {
            echo "<h1 style='color: red'>Заповніть пусті поля</h1> <p><a href='/users'>ПОВЕРНУТИСЯ НАЗАД</a></p>";
            return false;
        }

        $result = App::get('database')->insert('users', ['name' => $newName]);

        if ($result) {
            redirect(users);
        } else {
            echo 'Query exeption';
        }
    }
}
