<?php

if (! empty($_POST["submit"])) {
    session_start();

    $newfirstname = filter_var($_POST["first_name"], FILTER_SANITIZE_STRING);
    $newlastname = filter_var($_POST["last_name"], FILTER_SANITIZE_STRING);
    $newsubject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $newmessage = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    $newemail =   filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    
    require_once ("../../config/class/ShoppingCart.php");
    
    $member = new ShoppingCart();
    $isdone = $member->message_info($newfirstname,$newlastname,$newsubject,$newmessage,$newemail);
    if (! $isdone) {
        $_SESSION["noMessage"] = "Please Try Again";
        header("Location: http://myprojectspi.ga/contact");
    }
    if ($isdone) {
        $_SESSION["yesMessage"] = "successful Enter";
        header("Location: http://myprojectspi.ga/contact");
    }
}