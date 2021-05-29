<?php

include('../DAL/database.php');


if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])) {
    // $firstname, $lastname, $email, $username, $password
    addUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['username'], $_POST['password']);

    // THIS WILL NEED TO BE CHANGED !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    $user = getUser($_POST['username'], $_POST['password']);
    if ($user) {
        setcookie("user", json_encode($user), time() + 3600, "/");
    }

    header("Location: http://localhost:4321");
    // exit();
}