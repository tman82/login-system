<?php

    session_start();

    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];

    if(trim($userEmail) == "user@gmail.com" && trim($userPassword) == "secret") {

        $_SESSION["loggedIn"] = true;
        header('Location: members-page.php');

    } else {

        header('Location: signin.php?badUserRequest=true');

    }

?>