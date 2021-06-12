<?php

include_once("./DAL/database.php");

/**
 * file_get_contents — Reads entire file into a string
 * php://input — Allows you to read raw data from the request body
 */
$newTicket = json_decode(file_get_contents('php://input'));

if ($newTicket !== null) {
    $intId = intval($newTicket->id);

    if (updateTicketStatus($intId, $newTicket->ticket_status)) {
        $updatedTicket = getUpdatedTicket($intId);
        echo json_encode($updatedTicket);
    }
}