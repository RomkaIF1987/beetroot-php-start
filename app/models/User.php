<?php
namespace App\Models;

class User
{

    public $id;
    public $name;
    public $lastName;
    public $mobilePhone;

        public function getFullName()
    {
        return $this->name . ' ' . $this->lastName;
    }
}

