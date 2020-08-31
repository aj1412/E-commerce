<?php
// Report all errors except E_NOTICE   
error_reporting(E_ALL ^ E_NOTICE); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ONLINE BOOK STORE || <?php session_start(); echo $_SESSION["username"]; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime ownwork">
<meta http-equiv="refresh" content="900;url=logout.php" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="assets/css/main_styles.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164644247-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-164644247-1');
</script>
</head>
<body>
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
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="icon" id="rollOver">
        <a href="cart">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
            <g>
                <path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
                    c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
                    C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
                    H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
                    c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
            </g>
        </svg>
        <?php
            echo "<div>Cart(<span id='total-quantity'>$item_quantity</span>)</div>";
        ?>
    </a>
    </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
      <a class="navbar-brand" href="http://myprojectspi.ga/">Book Store</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://myprojectspi.ga/">Home</a></li>
        <li><a href="book">Book</a></li>
        <li><a href="contact">Contact</a></li>
        <?php session_start();
        if($_SESSION['userId']) {
        echo "<li><a href='' class='user'>". $_SESSION['username'] ."</a></li>";    
        echo "<li><a href='application/view/logout'>Logout</a></li>";
        }
        else{
            echo "<li><a href='login'>Login/Registration</a></li>";
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $('rollOver').click(function(){
  window.location = "http://myprojectspi.ga/cart";
});
</script>


