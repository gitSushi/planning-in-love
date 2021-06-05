<?php

class MinTeam
{
    protected $id;
    protected $name;


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
}