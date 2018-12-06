<?php

class User
{

    public $id;
    public $name;
    public $lastName;
    public $mobilePhone;

    public function nameIgor()
    {
        $this->name = 'Igor';
    }

    public function getFullName()
    {
        return $this->name . ' ' . $this->lastName;
    }
}
