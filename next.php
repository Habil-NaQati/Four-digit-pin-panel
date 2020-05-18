<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>next</title>
        <!-- CSS Main-->
        <link href="main-min.css" rel="stylesheet">
        <!-- CSS Compulsory -->
        <link href="response.min.css" rel="stylesheet">

        <link rel="stylesheet" href="animation.css">
    </head>
    <body>
    <?php
    $password = $_POST ['password'];
    $pass = '1234';
    if ($password === $pass) {

        require_once "index.php";



    } else {
        echo /** @lang text */
        "     <body class='container-fluid' background='dt1.jpg'>";
        echo /** @lang text */
        "<div class='u-content-centered text-danger font-weight-medium'>
              Wrong Pin! Check your Pin & Try Again...</div>";
        header("refresh:3;url=Home.php");
        echo /** @lang text */
        "</body>";


    }

    ?>

    </body>
    </html>