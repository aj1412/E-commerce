<?php	
include "payment.php";

include "siteheader.php";

// variable
$payid = $_GET['payment_request_id'];
$status = $_GET['payment_status'];
$paymentid = $_GET['payment_id'];
$id = $_SESSION["orderid"];

$lname = $_SESSION["lname"];
$member_id = $_SESSION['userId'];
//end
	$newmember_id = $_SESSION['userId'];
    $newlastname = $_SESSION["lname"];
    $neworderid = $_SESSION["orderid"];
    $newpayment_id = $_GET['payment_request_id'];
    $status = $_GET['payment_status'];
    $newpaymentid = $_GET['payment_id'];

    $payment = json_decode($response, true);
    if ($status == 'Credit') {
            $shoppingCart->emptyPaymentCart($member_id);
          }
   
    if($payment['success'] == true )
    {

    $data = $payment['payment_request'];

    $amount = $data['amount'];
    $number = $data['phone'];
    $newemail = $data['email'];
    $address = $data['address'];
    $newfirstname = $data['buyer_name'];
    }


 

    
    require_once ("application/config/class/ShoppingCart.php");
    
    $member = new ShoppingCart();
    $isenter = $member->order_info($newmember_id,$newfirstname,$newlastname,$neworderid,$newpayment_id,$status,$newpaymentid,$newemail,$number,$amount);
?>
<div class="checkout">
<div class="container">
<div class="row">
    <!-- Billing Info -->
    <div class="col-md-12">
<div class="billing checkout_section">
                        <div class="section_title">Your Billing Info</div>
                        <div class="checkout_form_container">
                            <form method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Name -->
                                        <label for="checkout_name">First Name*</label>
                                        <input type="text" name="first_name" id="first_name" class="checkout_input" value="<?php echo $name;?>" readonly>
                                    </div>
                                    <div class="col-md-6 last_name_col">
                                        <!-- Last Name -->
                                        <label for="checkout_last_name">Last Name*</label>
                                        <input type="text" name="last_name" id="last_name" class="checkout_input" value="<?php echo $lname ;?>" readonly>
                                    </div>
                                <div class="col-md-6">
                                    <!-- order_id -->
                                    <label for="checkout_email">order_id*</label>
                                    <input type="phone" name="order" id="order" class="checkout_input" value="<?php echo $id ;?>" readonly>
                                </div>
                                <div class="col-md-6 last_name_col">
                                    <!-- member_id -->
                                    <label for="checkout_email">Member_id*</label>
                                    <input type="phone" name="member" id="member" class="checkout_input" value="<?php echo $member_id ;?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <!-- Payment_request_id -->
                                    <label for="checkout_email">Payment_id*</label>
                                    <input type="phone" name="payment" id="payment" class="checkout_input" value="<?php echo $payid ;?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <!-- Payment_request_id -->
                                    <label for="checkout_email">Amount*</label>
                                    <input type="phone" name="Amount" id="payment" class="checkout_input" value="<?php echo $amount ;?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <!-- status -->
                                    <label for="checkout_email">Status*</label>
                                    <input type="phone" name="status" id="payment" class="checkout_input" value="<?php echo $status ;?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <!-- Payment_id -->
                                    <label for="checkout_email">Payment_id*</label>
                                    <input type="phone" name="payid" id="payid" class="checkout_input" value="<?php echo $paymentid ;?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <!-- Email -->
                                    <label for="checkout_email">Email Address*</label>
                                    <input type="phone" name="email" id="email" class="checkout_input" value="<?php echo $email ;?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <!-- Email -->
                                    <label for="checkout_email">Phone Number*</label>
                                    <input type="phone" name="number" id="number" class="checkout_input" value="<?php echo $number ;?>" readonly>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "sitefooter.php"
    ?>
<!-- footer -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
					