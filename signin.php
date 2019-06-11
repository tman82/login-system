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

    #sign-in-div {
        background: #eee;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    #sign-in-wrapper {
        height: 500px;
        width: 700px;
        text-align: center;
        padding-top: 50px;
        margin: 0 auto;
        background: white;
        box-shadow: 0px 13px 21px -10px rgba(0, 0, 0, 0.1)
    }

    #h2-wrap {
        margin-bottom: 30px;
    }

    #sign-in-wrapper input {
        margin-bottom: 20px;
        height: 43px;
        width: 300px;
        border-style: solid;
        border: none;
        border-radius: 2px;
    }

    .left-space {
        padding-left: 10px;
        border: solid #ddd 1px !important; 
    }

    #submit {
        background: #04B2D9;
        font-weight: 600;
        color: #eee;
    }

    #sign-in-h2 {
        color: #5c5c5c;
    }



</style>

    <nav>
        <ul>
            <li class="logo"><a href="index.php">FOTO</a></li>
        </ul>
    </nav>

    <?php

        if(isset($_SESSION['loggedIn'])) {

            echo "<p>You are already logged in!</p>";
            
        } else {
            
            $loginForm = <<<LOGINFORM

            <div class="container-fluid">
                <div class="row" id="sign-in-div">
                    <div class="col-lg-12">
                        <div id="sign-in-wrapper">
                            <div id="h2-wrap">
                                <h2 id="sign-in-h2">Sign In</h2>
                            </div>
                            <form method="POST" action="signin-response.php">
                                <input type="text" name="email" class="left-space" id="email" placeholder="EMAIL"><br>
                                <input type="password" name="password" class="left-space" id="password" placeholder="PASSWORD"><br>
                                <input type="submit" name="submit" id="submit" value="SIGN IN">
                            </form>
                            <div id="message"></div>
                        </div>
                    </div>
                </div>
            </div>

LOGINFORM;

            echo $loginForm; 

        }

    ?>


    <?php

        if(isset($_GET["blocked"])) {

            echo "<p>Please sign in!</p>";
            echo "<script>document.getElementById('email').focus();</script>";

        } else if(isset($_GET["badUserRequest"])) {

            echo "<script>document.getElementById('password').focus();</script>";

        }
    ?>


        <script src="js/process.js"></script>
    
</body>
</html>