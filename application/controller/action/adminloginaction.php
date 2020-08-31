<?php

if (! empty($_POST["login"])) {
    session_start();
    $username = filter_var($_POST["admin"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    require_once ("../../config/class/ShoppingCart.php");
    $member = new ShoppingCart();
    $isLoggedIn = $member->adminLogin($username, $password);
    if (! $isLoggedIn) {
        $_SESSION["adminerrorMessage"] = "Invalid Credentials";
        header("Location: https://myprojectspi.ga/panel");
    }
    if ($isLoggedIn) {
     $_SESSION["adminsucessMessage"] = "Login Complete";  
     header("Location: https://myprojectspi.ga/application/controller/admin/dashboard"); 
    }
    
    exit();
}