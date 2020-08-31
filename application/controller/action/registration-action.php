<?php

if (! empty($_POST["login"])) {
    session_start();
    $newusername = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $newname = filter_var($_POST["display_name"], FILTER_SANITIZE_STRING);
    $passwordHash = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $newemail = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    require_once ("../../config/class/ShoppingCart.php");
    
    $member = new ShoppingCart();
    $isregistered = $member->registrationLogin($newusername, $newname, $passwordHash,$newemail);
    if (! $isregistered) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
        header("Location: http://myprojectspi.ga/registration");
    }
    if ($isregistered) {
        $_SESSION["sucessMessage"] = "Registration Complete";
        header("Location: http://myprojectspi.ga/login");
    }
    
    exit();
}
