<?php

    session_start();

    if(isset($_SESSION['loggedIn'])) {

        // Do nothing

    } else {

        header('signin.php?blocked=true');
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<style>

        * {
            font-family: 'Karla', sans-serif;
        }

        nav {
            margin-top: 10px;
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

        #photo-section {
            padding-top: 100px;
        }

        .row1 {
            background: #fff;
            margin-bottom: 25px;
        }

        .photo-wrap {
            padding-left: 240px;
        }

        .photo-wrap img {
            margin: 20px;
        }

        #featured {
            color: #323A45;
            font-weight: 600;
            font-size: 25px;
            margin-left: 19px;
        }

        .left-edge {
            margin-left: 19px;
        }

        .title {
            color: #323A45;
            font-weight: 600;
        }

        .name {
            font-family: 'Karla', sans-serif;
            color: #a5a5a5;
            font-size: 16px;
            
        }

        .price {
            font-size: 15px;
            padding-right: 21px;
        }

</style>


    <nav>
        <ul>
            <li class="logo"><a href="index.php">FOTO</a></li>
            <li class="pull-right"><a href="signout.php" id="sign-out">Sign Out</a></li>
        </ul>
    </nav>


    <!-- Photos section -->
    <div class="container-fluid">
        <div class="row" id="photo-section">
            <div class="col">
                <div class="photo-wrap">
                    <h2 id="featured">Featured</h2>
                    <ul class="row1">
                        <li>
                            <img class="img-responsive" src="img/1-m.jpg" alt="">
                            <h4 class="left-edge title">Glow<span class="price pull-right">$30.00</span></h4>
                            <p class="left-edge name">Marc David</p>
                        </li>
                        <li>
                            <img class="img-responsive" src="img/2-m.jpg" alt="">
                            <h4 class="left-edge title">Smoky<span class="price pull-right">$25.00</span></h4>
                            <p class="left-edge name">Kelly Dandrige</p>
                        </li>
                        <li>
                            <img class="img-responsive" src="img/3-m.jpg" alt="">
                            <h4 class="left-edge title">Orange Temp<span class="price pull-right">$45.00</span></h4>
                            <p class="left-edge name">Tiffany Hanner</p>
                        </li>
                    </ul>
                    <ul class="row1">
                        <li>
                            <img class="img-responsive" src="img/4-m.jpg" alt="">
                            <h4 class="left-edge title">Field<span class="price pull-right">$40.00</span></h4>
                            <p class="left-edge name">John Pain</p>
                        </li>
                        <li>
                            <img class="img-responsive" src="img/5-m.jpg" alt="">
                            <h4 class="left-edge title">Levels<span class="price pull-right">$25.00</span></h4>
                            <p class="left-edge name">Erica Wilson</p>
                        </li>
                        <li>
                            <img class="img-responsive" src="img/6-m.jpg" alt="">
                            <h4 class="left-edge title">Doggy<span class="price pull-right">$23.00</span></h4>
                            <p class="left-edge name">Gerald Henderson</p>
                        </li>
                    </ul>
                    <ul  class="row1">
                        <li>
                            <img class="img-responsive" src="img/7-m.jpg" alt="">
                            <h4 class="left-edge title">Streaks<span class="price pull-right">$37.00</span></h4>
                            <p class="left-edge name">Marie Grant</p>
                        </li>
                        <li>
                            <img class="img-responsive" src="img/8-m.jpg" alt="">
                            <h4 class="left-edge title">Hills Dream<span class="price pull-right">$38.00</span></h4>
                            <p class="left-edge name">Tony Pollard</p>
                        </li>
                        <li>
                            <img class="img-responsive" src="img/11-m.jpg" alt="">
                            <h4 class="left-edge title">Choose A Side<span class="price pull-right">$50.00</span></h4>
                            <p class="left-edge name">Larry Brock</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>