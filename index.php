<?php
// include('./core/authentication/guard.php');
// if (!isLogged()) header('Location: http://localhost:4321/templates/login.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/tailwind.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>planning with love</title>

</head>

<body class="box-border">
    <?php
    include('./templates/nav.php');
    include('./controller/body_contoller.php');
    // $obj = json_decode($_COOKIE['user']);
    ?>
    <!-- <p style="color:red;"><?php
                                //  print $obj->{'username'}; 
                                ?></p> -->
</body>

</html>