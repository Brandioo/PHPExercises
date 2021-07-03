<?php

class Users
{
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $role;

    /**
     * Users constructor.
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $password
     * @param $role
     */
    public function __construct($firstName, $lastName, $email, $password, $role)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }


}
