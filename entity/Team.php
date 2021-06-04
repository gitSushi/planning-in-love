<?php

class Team
{
    private $id;
    private $name;
    private $slogan;
    private $logo;

    // public function __construct($id)
    // {
    //     /**
    //      * not auto-incremented
    //      */
    //     $this->id = $id;
    // }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getSlogan()
    {
        return $this->slogan;
    }

    public function setSlogan($slogan)
    {
        return $this->slogan = $slogan;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        return $this->logo = $logo;
    }
}