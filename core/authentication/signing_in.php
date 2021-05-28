<?php

include('../DAL/database.php');


if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])) {
    addUser($_POST['username'], $_POST['password'], $_POST['firstname'], $_POST['lastname'], $_POST['email']);

    header("Location: http://localhost:4321");
    // exit();
}
