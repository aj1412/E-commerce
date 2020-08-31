<?php 
session_start();
$_SESSION["user_id"] = "";

session_destroy();
$url=$_SERVER['HTTP_REFERER'];
header("location:$url");