<?php
	include "application/controller/action/cart.php";
	include "siteheader.php";

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
										<li><a href="http://myprojectspi.ga/">Home</a></li>
										<li>Books</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Products -->
<section class="model_new">
	<div class="container">
		<div class="row">
<?php
$query = "SELECT * FROM tbl_product";
$product_array = $shoppingCart->getAllProduct($query);
if (! empty($product_array)) {
    foreach ($product_array as $key => $value) {
?>
			<div class="col-md-4 col-sm-4 mt mb">
				<form method="post" action="book?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
<?php include "sitefooter.php"; ?>
<script>
	if ( window.history.replaceState ) {
	  window.history.replaceState( null, null, window.location.href );
	}
</script>