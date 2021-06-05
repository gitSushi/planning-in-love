<?php

class Ticket
{
    private $id;
    private $ticket_status;
    private $end_date;
    private $affected;
    private $project_affected;

    public function getId()
    {
        return $this->id;
    }

    public function getTicketStatus()
    {
        return $this->ticket_status;
    }

    public function setTicketStatus($ticketStatus)
    {
        return $this->ticket_status = $ticketStatus;
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
     * Err ... Not so sure what affected is for !
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
        return $this->project_affected;
    }

    public function setProjectAffected($projectAffected)
    {
        return $this->project_affected = $projectAffected;
    }
}