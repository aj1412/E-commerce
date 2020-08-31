<?php
include "application/controller/action/cart.php";
session_start();
$std= $_SESSION['userId'];
$name = $_SESSION["name"];
$phoneno = $_SESSION["number"];
$email = $_SESSION["mail"];
$address = $_SESSION["address"];
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

    
   

					$ch = curl_init();
		            curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
		            curl_setopt($ch, CURLOPT_HEADER, FALSE);
		            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		            curl_setopt($ch, CURLOPT_HTTPHEADER,
		            array("X-Api-Key:'your Key'", "X-Auth-Token:'your token_name(token)'"));
		           	
		           	 $payload = Array(
		                'purpose' => substr('Alok Online Book Store',0,29),
		                'amount' => $item_price,
		                'phone' => $phoneno,
		                'buyer_name' =>$name,
		                'redirect_url' => 'https://myprojectspi.ga/response',
		                'send_email' => true,
		                'webhook' => 'https://myprojectspi.ga/',
		                'send_sms' => true,
		                'email' => $email,
		                'shipping_address' =>$address,
		                'allow_repeated_payments' => false
		            );
		         
		           	
		            curl_setopt($ch, CURLOPT_POST, TRUE);
		            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
		            $response = curl_exec($ch);
		            curl_close($ch);
		            $data = json_decode($response);
		            
		            if($data->success){
		            	$content='<a  href="'.$data->payment_request->longurl.'">Click to Pay</a>';
		            }else{
		               $content='Error';
		            }
?>