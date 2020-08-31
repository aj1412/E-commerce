<?php
        // Report all errors except E_NOTICE   
        error_reporting(E_ALL ^ E_NOTICE);
        include "application/controller/action/cart.php";
        include "siteheader.php";
        $shoppingCart->updateCartQuantity($_POST["new_quantity"], $_POST["cart_id"]);
        
?>
<div class="wrapper">
<!-- Home -->
<div class="top">
        <div class="home_container">
            <div class="home_background"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="index">Home</a></li>
                                        <li>Shopping Cart</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Info -->
<?php
if (! empty($cartItem)) {
    ?>
    <div class="cart_info">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <!-- Column Titles -->
            

 <?php
    foreach ($cartItem as $item) {
        ?>
<div class="col-md-8 responsive">
<!-- Cart Item -->

<div class="cart_item">
<!-- Name -->
<img class="prod-img" src="application/controller/admin-function/<?php echo $item["image"]; ?>">
<div class="cart_item_name_container">
<div class="cart_item_name"><a href=""><?php echo $item["name"]; ?></a></div>
<div class="cart_item_total"><?php echo "<i class='fa fa-inr' aria-hidden='true'></i>
". $item["price"] ; ?></div>
</div>
<!-- Total -->
<!-- Quantity -->
<div class="cart-info_quantity">
                    <div class="btn-increment-decrement" onClick="decrement_quantity(<?php echo $item["cart_id"]; ?>, '<?php echo $item["price"]; ?>')">-</div><input class="input-quantity"
                        id="input-quantity-<?php echo $item["cart_id"]; ?>" value="<?php echo $item["quantity"]; ?>"><div class="btn-increment-decrement"
                        onClick="increment_quantity(<?php echo $item["cart_id"]; ?>, '<?php echo $item["price"]; ?>')">+</div>
                </div>
</div> 
<div class="blw">
<div class="cart_item_total" id="cart-price-<?php echo $item["cart_id"]; ?>">
                        <?php echo "<i class='fa fa-inr' aria-hidden='true'></i>
". ($item["price"] * $item["quantity"]); ?>
                    </div>
<!-- remove -->
<div class="cart_item_remove"><a href="cart?action=remove&id=<?php echo $item["cart_id"]; ?>" class="btnRemoveAction"><i class="fa fa-trash" aria-hidden="true">&nbsp;Remove</i></a></div>
</div>
</div>

     <?php
    }
    ?>        
</div>            
                <div class="col-md-4">
                    <div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                        <div class="button continue_shopping_button"><a href="book">Continue shopping</a></div>
                        <div class="cart_buttons_right ml-lg-auto">
                            <div class="button clear_cart_button"><a href="cart?action=empty">Clear cart</a></div>
                        </div>
                    </div>
                
            
                    
              

                    <!-- Coupon Code -->
                    <!-- <div class="coupon">
                        <div class="section_title">Coupon code</div>
                        <div class="section_subtitle">Enter your coupon code</div>
                        <div class="coupon_form_container">
                            <form action="#" id="coupon_form" class="coupon_form">
                                <input type="text" class="coupon_input" required="required">
                                <button class="button coupon_button"><span>Apply</span></button>
                            </form>
                        </div>
                    </div> -->
                

            
                    <div class="cart_total">
                        <div class="section_title">Cart total</div>
                        <div class="section_subtitle">Final info</div>
                        <div class="cart_total_container">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <span class="cart_total_title">Shipping</span>
                                    <div class="cart_total_value ml-auto">Free</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <span class="cart_total_title">Total</span>
                                    <div class="cart_total_value ml-auto"><span id="total-price"><?php echo $item_price; ?></span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="button checkout_button"><a href="bill_info">Proceed to checkout</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}else{
    ?><div class="none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                        <div class="button continue_shopping_button"><a href="book">Continue shopping</a></div>
                        <div class="cart_buttons_right ml-lg-auto">
                            <div class="button clear_cart_button"><a href="cart?action=empty">Clear cart</a></div>
                        </div>
                    </div>
            
            <div class="cart_total">

                        <div class="section_title">Cart total</div>
                        <div class="section_subtitle">Final info</div>
                        <div class="cart_total_container">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <span class="cart_total_title">Shipping</span>
                                    <div class="cart_total_value ml-auto">Free</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <span class="cart_total_title">Total</span>
                                    <div class="cart_total_value ml-auto"><span id="total-price"><?php echo $item_price; ?></span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="button checkout_button"><a href="bill_info">Proceed to checkout</a></div>
                    </div>
</div> </div>
</div>
</div>
                    <?php
}
    ?>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
<script>
function increment_quantity(cart_id, price) {
    var inputQuantityElement = $("#input-quantity-"+cart_id);
    var newQuantity = parseInt($(inputQuantityElement).val())+1;
    var newPrice = newQuantity * price;
    save_to_db(cart_id, newQuantity, newPrice);
}

function decrement_quantity(cart_id, price) {
    var inputQuantityElement = $("#input-quantity-"+cart_id);
    if($(inputQuantityElement).val() > 1) 
    {
    var newQuantity = parseInt($(inputQuantityElement).val()) - 1;
    var newPrice = newQuantity * price;
    save_to_db(cart_id, newQuantity, newPrice);
    }
}

function save_to_db(cart_id, new_quantity, newPrice) {
    var inputQuantityElement = $("#input-quantity-"+cart_id);
    var priceElement = $("#cart-price-"+cart_id);
    $.ajax({
        url : "cart.php",
        data : "cart_id="+cart_id+"&new_quantity="+new_quantity,
        type : 'post',
        success : function(response) {
            $(inputQuantityElement).val(new_quantity);
            $(priceElement).text("₹"+newPrice);
            var totalQuantity = 0;
            $("input[id*='input-quantity-']").each(function() {
                var cart_quantity = $(this).val();
                totalQuantity = parseInt(totalQuantity) + parseInt(cart_quantity);
            });
            $("#total-quantity").text(totalQuantity);
            var totalItemPrice = 0;
            $("div[id*='cart-price-']").each(function() {
                var cart_price = $(this).text().replace("₹","");
                totalItemPrice = parseInt(totalItemPrice) + parseInt(cart_price);
            });
            $("#total-price").text(totalItemPrice);
        }
    });
}
</script>
    <?php
include "sitefooter.php";
?>