<?php
    
// Report all errors except E_NOTICE   
error_reporting(E_ALL ^ E_NOTICE);
 require_once ("../../config/class/ShoppingCart.php");
    
    $member = new ShoppingCart();



    
    $member_id = $_SESSION[adminId];
    


$shoppingCart = new ShoppingCart();
if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "removeproduct":
            // Delete single entry from the cart
            $shoppingCart->deleteproduct($_GET["id"]);
            echo "<meta http-equiv='refresh' content='0;url=http://myprojectspi.ga/application/controller/admin/tables'>";
            break;
         case "removeuser":
            // Delete single entry from the cart
            $shoppingCart->deleteuser($_GET["id"]);
            echo "<meta http-equiv='refresh' content='0;url=http://myprojectspi.ga/application/controller/admin/loginusers'>";
            break;   
        case "empty":
            // Empty cart
            $shoppingCart->emptyCart($member_id);
            break;
    }
}

?>