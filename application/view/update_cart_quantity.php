<?php
require_once "ShoppingCart.php";
$num = rand(1,500);
session_start();
if($_SESSION['userId']) {

$member_id = $_SESSION[userId];
}
else{
    $member_id = $num;
} // you can your integrate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();
 
$shoppingCart->updateCartQuantity($_POST["new_quantity"], $_POST["cart_id"]);
                
?>