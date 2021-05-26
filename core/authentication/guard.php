<?php

function isLogged()
{
    $flag = false;
    session_start();
    if (isset($_SESSION['user'])) $flag = !$flag;
    return $flag;
}
