<?php
session_start();

// $_SESSION = array();
session_destroy();
setcookie("PHPSESSID", "", time());

header('Location: http://localhost:4321');