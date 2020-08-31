<?php 
include "application/controller/action/cart.php";
include "siteheader.php"; ?>
<!-- Home -->
<div class="home">
	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner-box">
						<h1>Join Hands to Tide the Disruption of Covid-19</h1>
						<p class="bannerSub-hdng">Welcome To Book Store</p>
						<p class="explore"><a href="#new"><button id="#new" class="bt" id="newbt">Explore</button></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- Ads -->
<section class="we_provide">
	<div class="container">
		<div class="row">
			<div class="outer-box text-center">
				<div class="col-md-4 categoryDiv mt mb">
					<div class="no-decoration">
						<img class="img" src="https://trigrrank.com/wp-content/uploads/2020/05/online-exam-icon-15.jpg" alt="onlinesoftware">
						<h3 class="no-margin"> Online Book Store</h3>
						<p class="pt-2">you will find all  types of book here &amp; we dont use cookies to store your data. We are always working to maintain the website properly.</p>
					</div>
				</div>
				<div class="col-md-4 categoryDiv mt mb">
					<div class="no-decoration">
						<img class="img" src="https://trigrrank.com/wp-content/uploads/2020/05/app-development-icon-37.png" alt="onlinesoftware">
						<h3 class="no-margin">App Support</h3>
						<p class="pt-2">we are soon releasing &amp; our app to provide more support. Join with us to create a perfect book palace.Soon we provide books in pdf format for free to read and learn</p>
					</div>
				</div>
				<div class="col-md-4 categoryDiv mt mb">
					<div class="no-decoration">
						<img class="img" src="https://trigrrank.com/wp-content/uploads/2020/05/online-video-icon-21.png" alt="onlinesoftware">
						<h3 class="no-margin">Live video Support</h3>
						<p class="pt-2">we will soon be providing video support for our customer to give them proper support. Stay tune with us for better future</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Products -->
<section class="model">
	<div class="container">
		<h2 class="fixed text-center mt"> for All 
Student</h2>
		<div class="row">
<?php
$query = "SELECT * FROM tbl_product LIMIT 8";
$product_array = $shoppingCart->getLimitProduct($query);
if (! empty($product_array)) {
    foreach ($product_array as $key => $value) {
?>
			<div class="col-md-4 col-sm-4 mt mb">
				<form method="post" action="index?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
				<div class="shadow-box" id="new">
					<img class="new-icon" src="assets/images/icons8-book-100.png" alt="onlinesoftware"> <span class="start">
Books we are Providing
</span>
					<p class="pd-1">Name : <?php echo $product_array[$key]["name"]; ?></p>
					<p class="pd-1">Cost : Rs <?php echo $product_array[$key]["price"]; ?></p>
					<input type="text" class="product-quantity" name="quantity" value="1" size="2" />
					<?php
					if(! $_SESSION['userId'])
                        {
                        echo "<br />";
                        echo "Login To  Add to cart <br><h5 class='green'><a href='login'</a>To Login<br></h5>";
                        ?>
                        <?php
                        }
                        else
                            echo "<h5 class='green'><button type='submit' id='PageRefresh' value='Add to Cart' class='btnAddAction'> Add to Cart &nbsp; <span class='glyphicon glyphicon-menu-right'></span></h5>";
                        ?>
                    <div class="side-icon"><img class="new-icon" src="application/controller/admin-function/<?php echo $product_array[$key]["image"]; ?>" alt="books"> </div>
                    <h5 class="cart">Go to Your Cart to Buy
                    &nbsp; <span class="glyphicon glyphicon-menu-right"></span></h5>
				</div>
			</form>
			</div>
			<?php
			}
			}
			?>
		</div>
	</div>
</section>
<!-- Ad -->
<section class="icon-new">
	<div class="avds_xl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="avds_xl_container clearfix">
						<div class="avds_xl_background"></div>
						<div class="avds_xl_content">
							<div class="avds_title">Amazing Books</div>
							<div class="avds_text">"A good bookshop is just a genteel Black Hole that knows how to read."</div>
							<div class="avds_link avds_xl_link"><a href="book">See More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Icon Boxes -->
<section class="offer">
	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image">
							<img src="assets/images/icon_1.svg" alt="">
						</div>
						<div class="icon_box_title">Free Shipping Worldwide</div>
						<div class="icon_box_text">
							<p>We will soon be starting shipping our books worldwide.</p>
						</div>
					</div>
				</div>
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image">
							<img src="assets/images/icon_2.svg" alt="">
						</div>
						<div class="icon_box_title">Free Returns</div>
						<div class="icon_box_text">
							<p>We don't ask for charges if the problem cause by our side.</p>
						</div>
					</div>
				</div>
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image">
							<img src="assets/images/icon_3.svg" alt="">
						</div>
						<div class="icon_box_title">24h Fast Support</div>
						<div class="icon_box_text">
							<p>We are always working our best to provide support as soon as possible.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include "sitefooter.php"; ?>
<script>
	if ( window.history.replaceState ) {
	  window.history.replaceState( null, null, window.location.href );
	}
</script>