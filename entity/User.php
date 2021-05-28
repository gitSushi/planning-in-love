<?php

class User
{
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $logo;
    private $username;
    private $password;

    public function getId()
    {
        return $this->id;
    }

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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        return $this->logo = $logo;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        return $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        return $this->password = $password;
    }
}
