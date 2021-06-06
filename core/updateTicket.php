<?php

include_once("./DAL/database.php");

$newTicket = json_decode(file_get_contents('php://input'));

if ($newTicket !== null) {
    updateTicketStatus(intval($newTicket->id), $newTicket->ticket_status);

    $resp = json_encode($newTicket->id);
    echo "Ticket " . $resp . " was updated.";
}