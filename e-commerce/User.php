<?php

class User{
    public $name;
    public $lastName;
    public $email;
    public $password;
    public $role;

    public function __construct($name, $lastName, $email, $password, $role){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }
}