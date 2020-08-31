<?php
session_start();
if(!empty($_SESSION["userId"])) {
    header("location:  http://myprojectspi.ga");
} else {
    require_once ( "login-form.php");
}
?>