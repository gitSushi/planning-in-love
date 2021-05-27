<?php

include('../DAL/database.php');

/**
 * 
 */
function checkUser($username, $password)
{
    $user = getUser($username, $password);
    if ($user) {
        setcookie("user", json_encode($user), time() + 3600, "/");
    }
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    checkUser($_POST['username'], $_POST['password']);

    header("Location: http://localhost:4321");
    // exit();
}

// header("Location: http://localhost:4321/templates/login.php");
