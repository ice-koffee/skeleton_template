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
<body>
	
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						
						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								
								<li><a href="about.html" style="color: #50C878;">Checkout</a></li>
								
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

	<br><br><br><br><br>

				<div class="col-lg-11 col-md-12" style="margin-left: 15px;">
					<div class="cart-table-wrap">

						<?php 

						$subtotal = 0; 

						$output = "";

						$output .= "

						
						<table class='cart-table'>
							<thead class='cart-table-head'>
								<tr class='table-head-row'>
									
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
											
											<td class='product-name'>".$value['itemname']."</td>
											<td class='product-price'>".$value['price']."</td>
											<td class='product-quantity'>".$value['quantity']."</td>
											<td class='product-total'>".number_format($value['price'] * $value['quantity'],2)."</td>

						


									";

									$subtotal = $subtotal + $value['quantity'] * $value['price'];

									?> 
									<span id="sumTotal"><?php $subtotal; ?></span>
									
									<?php

								}?>


<?php


								$output .= "
									</tbody>
								</table>


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
									
								</div>
							</div>				

	";

							}
							
							echo $output;

							?>


							
							
						
					</div>
				</div>




	
		<!-- check out section -->
	<div class='checkout-section mt-150 mb-150'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-11'>
					<div class='checkout-accordion-wrap'>
						<div class='accordion' id='accordionExample'>
						  <div class='card single-accordion'>
						    <div class='card-header' id='headingOne'>
						      <h5 class='mb-0'>
						        <button class='btn btn-link' type='button' data-toggle='collapse' data-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
						          Billing Address
						        </button>
						      </h5>
						    </div>

						    <div id='collapseOne' class='collapse show' aria-labelledby='headingOne' data-parent='#accordionExample'>
						      <div class='card-body'>
						        <div class='billing-address-form'>
						        	<form id='paymentForm'>

						        		
						        		<p><input type='text' id='first-name' placeholder='First Name'/></p>
						        		<p><input type='text' id='last-name' placeholder='Last Name'/></p>
						        		<p><input type='email' id='email-address' name='email-address' placeholder='Email' required /></p>
						        		 <p><input readonly value='<?php echo $subtotal; ?>' id='sumTotal' name='amount5'></p>
						        		<button type='submit' onclick='payWithPaystack()'> Pay </button>
						        	</form>
								</div>
						        		

						        	<script src="https://js.paystack.co/v1/inline.js"></script> 

						        	<script type="text/javascript">
						        		  var jsVar = "<?php echo $subtotal; ?>";
                					const paymentForm = document.getElementById('paymentForm');
        							paymentForm.addEventListener("submit", payWithPaystack, false);
							        function payWithPaystack() {


							            event.preventDefault();
							            let handler = PaystackPop.setup({                 
							                 key: 'pk_test_5fd865fe6d1c9b769cf944f9ebfd438ce018f071',               
							                email: document.getElementById("email-address").value,
							                amount: jsVar * 100,
							                ref: '' + Math.floor((Math.random() * 1000000000) + 1),
							                currency: 'NGN',
							                onClose: function() {
							                    
							                },
							                callback: function(response){


							                    
							                    $.ajax({
							                    url:"../actions/process.php?reference="+ response.reference,
							                    method:'GET',
							                    success: function (response){
							                        window.location.href="payment_done.php";
							                    }

							            });
							    }
							  });
							            handler.openIframe();
							        }
    		</script>

						        </div>
						      </div>
						    </div>
						  </div>
						 
						</div>

					</div>
				</div>

				
			</div>
		</div>
	</div>
	<!-- end check out section -->
	

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