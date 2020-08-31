<?php

if (! empty($_POST["login"])) {
    session_start();
    $username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    require_once ("../../config/class/ShoppingCart.php");
    
    $member = new ShoppingCart();
    $isLoggedIn = $member->processLogin($username, $password);
    if (! $isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
        header("Location: http://myprojectspi.ga/login");
    }
    if ($isLoggedIn) {
     $_SESSION["sucessMessage"] = "Login Complete";  
     header("Location: http://myprojectspi.ga/"); 
    }
    
    exit();
}