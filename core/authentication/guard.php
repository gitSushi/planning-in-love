<?php

function isLogged()
{
    session_start();
    if (isset($_SESSION['user'])) return true;

    setcookie("PHPSESSID", "", time());
    return false;
}
