<?php

namespace App\Controllers;

class PagesController
{

    public function contact()
    {
        view('contact');
    }

    public function about()
    {
        view('about');
    }

    public function index()
    {
        UsersController::index();
    }
}
