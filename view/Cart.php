<?php

require("../controllers/Iteminfo_controller.php");

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>ReConnect</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="../assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="stylesheet" href="../assets/css/main_two.css">
	<!-- responsive -->
	<link rel="stylesheet" href="../assets/css/responsive.css">

</head>
<body >
	
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						
						
						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								
								<li class="dash-text"><a href="Cart.php" style="color: #50C878;">Cart</a></li>
								
								</li>
								
								<li>
									
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->


	<!-- Start inserting code -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 col-md-12">
					<div class="cart-table-wrap">

						<?php 

						$subtotal = 0; 

						$output = "";

						$output .= "

						
						<table class='cart-table'>
							<thead class='cart-table-head'>
								<tr class='table-head-row'>
									<th class='product-remove'></th>
									<th class='product-image'>Product Image</th>
									<th class='product-name'>Name</th>
									<th class='product-price'>Price</th>
									<th class='product-quantity'>Quantity</th>
									<th class='product-total'>Total</th>
								</tr>
							</thead>
							<tbody>

							";


							if (!empty($_SESSION['cart'])) {
								
								foreach ($_SESSION['cart'] as $key => $value) {
									
									$output .= "

										<tr class='table-body-row'>
											<td class='product-remove'>
												<a href='../action/Iteminfo_proc.php?action=remove&id=".$value['id']."'><button class='add-item-button'>Remove</button></a>
												
											</td>
											<td class='product-image'><img src='".$value['image']."'></td>
											<td class='product-name'>".$value['itemname']."</td>
											<td class='product-price'>".$value['price']."</td>
											<td class='product-quantity'>".$value['quantity']."</td>
											<td class='product-total'>".number_format($value['price'] * $value['quantity'],2)."</td>

						


									";

									$subtotal = $subtotal + $value['quantity'] * $value['price'];
								}?>



<?php

								$output .= "
									</tbody>
								</table>

								<br><br>

								<div class='col-lg-6'>
								<div class='total-section'>
									<table class='total-table'>
										<thead class='total-table-head'>
											<tr class='table-total-row'>
												<th>Total</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr class='total-data'>
												<td><strong>Total: </strong></td>
												<td>".number_format($subtotal,2)."</td>
											</tr>
									
									
										</tbody>
									</table>
									<div class='cart-buttons'>
										<a href='../view/Dashboard.php' class='boxed-btn'>Update Cart</a>
										<a href='../view/Checkout.php' class='boxed-btn black'>Check Out</a>
									</div>
								</div>
							</div>


								";

							}


							echo $output;

							?>
							
						
					</div>
				</div>

			
			</div>
		</div>
	</div>
	<!-- end cart -->

	

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>ReConnect is a platform that encourages the recycling culture by allowing individuals to find use in materilas that would have otherwise been discarded. It is a new avenue for users to fins a more sustainbale or cheaper way of getting resources whilst helping the environment</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>Ashesi University, Berekuso</li>
							<li>reconnect@gmail.com</li>
							<li>+233 77 182 3456</li>
						</ul>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="../assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="../assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="../assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="../assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="../assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="../assets/js/main.js"></script>

</body>
</html>