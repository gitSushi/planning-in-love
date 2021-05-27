<?php

function isLogged()
{
    if (isset($_COOKIE['user'])) {
        return true;
    }

    return false;
}
