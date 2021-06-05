<?php

class Projekt
{
    private $project_id;
    private $project_name;
    private $description;
    private $logo;
    private $start_date;
    private $end_date;
    private $team;

    public function getProjektId()
    {
        return $this->project_id;
    }

    public function getProjektName()
    {
        return $this->project_name;
    }

    public function setProjektName($projektName)
    {
        return $this->project_name = $projektName;
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
        return $this->start_date;
    }

    public function setStartDate($startDate)
    {
        return $this->start_date = $startDate;
    }

    public function getEndDate()
    {
        return $this->end_date;
    }

    public function setEndDate($endDate)
    {
        return $this->end_date = $endDate;
    }

    /**
     * team id : eventually we need an instance of the team entity
     */
    public function getTeam()
    {
        return $this->team;
    }

    public function setTeam($team)
    {
        return $this->team = $team;
    }
}