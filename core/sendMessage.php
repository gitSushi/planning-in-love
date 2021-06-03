<?php

include_once("./DAL/database.php");

/**
 * NEED
 * header(string), body(string), sender(int), receiver(int), send_date(datetime)
 */
if (
    isset($_POST["receiver-id"]) && isset($_POST["header"])
    && isset($_POST["body"]) && isset($_COOKIE["user"])
) {
    $currentUserId = intval(json_decode($_COOKIE["user"])->id);
    $receiverId = intval($_POST["receiver-id"]);
    $d = new DateTime("NOW");
    $formatedDate = $d->format("Y-m-d H:i:s");

    sendMessage($_POST["header"], $_POST["body"], $currentUserId, $receiverId, $formatedDate);

    header("Location: http://localhost:4321/index.php?pages=users/user-detail&id=$receiverId");
    exit();
}

header("Location: http://localhost:4321");