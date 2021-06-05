<?php

class MinUser
{
    protected $id;
    protected $email;
    protected $logo;
    protected $username;

    public function getId()
    {
        return $this->id;
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
}