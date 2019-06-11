<?php

    session_start();

    session_unset();

    session_destroy();

    header('Location: index.php');
    exit();
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<style>

    * {
        font-family: 'Karla', sans-serif;
    }

    ul {
        font-family: 'Open Sans', sans-serif;
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    ul li {
        float: left;
        margin-left: 0px;
    }

    a {
        display: block;
        color: #000f08;
        width: 120px;
        text-align: center;
        padding: 4px;
        text-decoration: none;
    }

    .logo {
        font-size: 18px;
        font-weight: 600;
    }

    #logout-message {
        font-family: 'Karla', sans-serif;
    }

</style>

    <nav>
        <ul>
            <li class="logo"><a href="index.php">FOTO</a></li>
            <li class="pull-right"><a href="signin.php">Sign In</a></li>
        </ul>
    </nav>

    <p id="logout-message">You've signed out.</p>
    
</body>
</html>