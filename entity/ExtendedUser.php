<?php

include_once('entity/MinUser.php');

class ExtendedUser extends MinUser
{
    private $firstname;
    private $lastname;
    // private $password;



    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        return $this->firstname = $firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        return $this->lastname = $lastname;
    }

    // public function getPassword()
    // {
    //     return $this->password;
    // }

    // public function setPassword($password)
    // {
    //     return $this->password = $password;
    // }
}