<?php
include "application/controller/action/cart.php";
include "siteheader.php";
?>
<!-- Home -->
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
										<li><a href="http://myprojectspi.ga/">Home</a></li>
										<li>Contact</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->
	
	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8 contact_col">
					<?php 
				                    if(isset($_SESSION["noMessage"])) {
				                    ?>
				                    <div class="error-message"><?php  echo $_SESSION["noMessage"]; ?></div>
				                    <?php 
				                    unset($_SESSION["noMessage"]);
				                    } 
				                ?>

				                 <?php 
				                    if(isset($_SESSION["yesMessage"])) {
				                    ?>
				                    <div class="sucess-message"><?php  echo $_SESSION["yesMessage"]; ?></div>
				                    <?php 
				                    unset($_SESSION["yesMessage"]);
				                    } 
				                ?>
					<div class="get_in_touch">
						<div class="section_title">Get in Touch</div>
						<div class="section_subtitle">If you Need any Books Please conatct</div>
						<div class="section_subtitle">We provide books At reasonable price</div>
						<div class="contact_form_container">
							<form action="application/controller/action/contact_info.php" id="contact_form" class="contact_form" method="post">
								<div class="row">
									<div class="col-md-6">
										<!-- Name -->
										<label for="contact_name">First Name*</label>
										<input type="text" id="first_name" name="first_name" class="contact_input" required="required">
									</div>
									<div class="col-md-6 last_name_col">
										<!-- Last Name -->
										<label for="contact_last_name">Last Name*</label>
										<input type="text" id="last_name" name="last_name" class="contact_input" required="required">
									</div>
								</div>
								<div>
									<!-- Email-->
									<label for="contact_company">Email</label>
									<input type="text" id="email" name="email" class="contact_input">
								</div>
								<div>
									<!-- Subject -->
									<label for="contact_company">Subject</label>
									<input type="text" id="subject" name="subject" class="contact_input">
								</div>
								<div>
									<label for="contact_textarea">Message*</label>
									<textarea id="message" class="contact_input contact_textarea" name="message" required="required"></textarea>
								</div>
								<div class="order_button">
          							<input type="submit" name="submit">
          						</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-3 offset-xl-1 contact_col">
					<div class="contact_info">
						<div class="contact_info_section">
							<div class="contact_info_title">Marketing</div>
							<ul>
								<li>Phone: <span>+53 345 7953 3245</span></li>
								<li>Email: <span>yourmail@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Shippiing & Returns</div>
							<ul>
								<li>Phone: <span>+53 345 7953 3245</span></li>
								<li>Email: <span>yourmail@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Information</div>
							<ul>
								<li>Phone: <span>+53 345 7953 3245</span></li>
								<li>Email: <span>yourmail@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include "sitefooter.php";
?>