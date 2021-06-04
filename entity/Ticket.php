<?php

class Ticket
{
    private $id;
    private $ticketStatus;
    private $endDate;
    private $affected;
    private $projectAffected;

    public function getId()
    {
        return $this->id;
    }

    public function getTicketStatus()
    {
        return $this->ticketStatus;
    }

    public function setTicketStatus($ticketStatus)
    {
        return $this->ticketStatus = $ticketStatus;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        return $this->endDate = $endDate;
    }

    /**
     * team id : eventually we need an instance of the team entity
     */
    public function getAffected()
    {
        return $this->affected;
    }

    public function setAffected($affected)
    {
        return $this->affected = $affected;
    }

    /**
     * projekt id : eventually we need an instance of the projekt entity
     */
    public function getProjectAffected()
    {
        return $this->projectAffected;
    }

    public function setProjectAffected($projectAffected)
    {
        return $this->projectAffected = $projectAffected;
    }
}