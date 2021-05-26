<?php
include('./core/authentication/guard.php');
if (!isLogged()) header('Location: http://localhost/templates/login.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/tailwind.css">
    <title>planning with love</title>
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .user-card:hover {
            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
        }
    </style>

</head>

<body class="box-border">
    <p>HELOO</p>
    <?php
    include('./templates/nav.php');
    include('./controller/body_contoller.php');
    ?>

</body>

</html>