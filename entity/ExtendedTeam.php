<?php

include_once('entity/MinTeam.php');

class ExtendedTeam extends MinTeam
{
    private $slogan;
    private $logo;

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