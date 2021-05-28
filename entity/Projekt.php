<?php

class Projekt
{
    private $projektId;
    private $projektName;
    private $description;
    private $logo;
    private $startDate;
    private $endDate;
    private $team;

    public function getProjektId()
    {
        return $this->projektId;
    }

    public function getProjektName()
    {
        return $this->projektName;
    }

    public function setProjektName($projektName)
    {
        return $this->projektName = $projektName;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        return $this->description = $description;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        return $this->logo = $logo;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        return $this->startDate = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        return $this->endDate = $endDate;
    }

    public function getTeam()
    {
        return $this->team;
    }

    public function setTeam($team)
    {
        return $this->team = $team;
    }
}
