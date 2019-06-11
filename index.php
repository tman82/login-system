<?php

    session_start();

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

    ul {
        font-family: 'Open Sans', sans-serif;
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        /*float: left;*/
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

    #sign-in {
        margin-top: 2px;
    }

    #content-div {
        font-family: 'Karla', sans-serif;
    }

    #content-div h3 {
        font-weight: 600;
    }

    </style>


    <nav>
        <ul>
            <li class="logo"><a href="#">FOTO</a></li>
            <li class="pull-right"><a href="signin.php" id="sign-in">Sign In</a></li>
        </ul>
    </nav>

    <!-- Photos section -->
    <div class="container-fluid">
        <div class="row" id="main-section">
            <div class="col-lg-12" id="row1">
                <div id="content-div">
                    <h3>Tell stories with photos</h3>
                    <div id="join-btn">Join Us</div>
                </div>
            </div>
        </div>
    </div>



    
</body>
</html>