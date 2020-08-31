<?php
include "application/controller/action/cart.php";
include "siteheader.php";
$shoppingCart->updateCartQuantity($_POST["new_quantity"], $_POST["cart_id"]);
?>
<div class="wrapper">
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
										<li><a href="http://myprojectspi.ga/contact">Home</a></li>
										<li><a href="http://myprojectspi.ga/book">Shopping Cart</a></li>
										<li>Checkout</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->
	
	<div class="checkout">
		<div class="container">
			<div class="row">
				<!-- Billing Info -->
				<div class="col-md-6">
					<div class="billing checkout_section">
						<div class="section_title">Billing Address</div>
						<div class="section_subtitle">Enter your address info</div>
						<div class="checkout_form_container">
							<form action="billinfo" method="post">
								<div class="row">
									<div class="col-md-6">
										<!-- Name -->
										<label for="checkout_name">First Name*</label>
										<input type="text" name="first_name" id="first_name" class="checkout_input" required="required">
									</div>
									<div class="col-md-6 last_name_col">
										<!-- Last Name -->
										<label for="checkout_last_name">Last Name*</label>
										<input type="text" name="last_name" id="last_name" class="checkout_input" required="required">
									</div>
								</div>
								<div class="row">
								<div class="col-md-6">
									<!-- Country -->
									<label for="checkout_country">Country*</label>
									<input type="text" name="country" id="country" class="checkout_input" require="required">
								</div>
								<div class="col-md-6">
									<!-- Zipcode -->
									<label for="checkout_zipcode">Zipcode*</label>
									<input type="text" name="zipcode" id="zipcode" class="checkout_input" required="required">
								</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									<!-- City / Town -->
									<label for="checkout_city">City/Town*</label>
									<input type="text" name="city" id="city" class="checkout_input" require="required">
								</div>
								<div class="col-md-6">
									<!-- Phone no -->
									<label for="checkout_phone">Phone no*</label>
									 <input type="tel" id="phone_no" name="phone_no" class="checkout_input" required="required">
								</div>
								</div>
								<div>
									<!-- Address -->
									<label for="checkout_address">Address*</label>
									<input type="text" name="address" id="address" class="checkout_input" required="required">
								</div>
								<div>
									<!-- Email -->
									<label for="checkout_email">Email Address*</label>
									<input type="phone" name="email" id="email" class="checkout_input" required="required">
								</div>
							
						</div>
					</div>
				</div>
				<!-- Order Info -->

				<div class="col-md-6">
					<div class="order checkout_section">
						<div class="section_title">Your order</div>
						<div class="section_subtitle">Order details</div>

						<!-- Order details -->
						<?php
                        $cartItem = $shoppingCart->getMemberCartItem($member_id);
                        if (! empty($cartItem)) {
                        $item_quantity = 0;
                        $item_price = 0;
                        if (! empty($cartItem)) {
                            foreach ($cartItem as $item) {
                                $item_quantity = $item_quantity + $item["quantity"];
                                $item_price = $item_price + ($item["price"] * $item["quantity"]);
                                  }
                             }
                            }
                         ?>
						<div class="order_list_container">
							<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
								<div class="order_list_title">Product</div>
								<div class="order_list_value ml-auto">(<span id='total-quantity'><?php echo $item_quantity;?></span>)Item</div>
							</div>
							<?php
    							foreach ($cartItem as $item) {
        					?>
							<ul class="order_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title"><?php echo $item["name"]; ?> {BOOK Quantity [<?php echo $item["quantity"];?>]}</div>
									<div class="order_list_value ml-auto"><?php echo "Rs  " .  $item["price"] ; ?></div>
								</li>
							<?php
							}
							?>
							<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Shipping</div>
									<div class="order_list_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Total</div>
									<div class="order_list_value ml-auto"><span id="total-price"><?php echo  "Rs  " .  $item_price; ?></span></div>
								</li>
							</ul>
						</div>
						<div class="order_button">
          							<input type="submit" name="submit">
          						</div>
						<!-- Order Text -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include "sitefooter.php";
?>