<?php
session_start();
if(!empty($_SESSION["adminId"])) {
    header("location: https://myprojectspi.ga/application/controller/admin/dashboard");
} else {
    require_once 'adminlogin.php';
}
?>