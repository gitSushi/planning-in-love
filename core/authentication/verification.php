<?php

include('../DAL/database.php');

/**
 * 
 */
function checkUser($username, $password)
{
    $user = getUser($username, $password);
    if ($user) {
        session_start();
        // or check if a session already exist if not create one
        $_SESSION['user'] = $user;
    }
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    checkUser($_POST['username'], $_POST['password']);

    header("Location: http://localhost:4321");
    // exit();
}

// header("Location: http://localhost:4321/templates/login.php");
