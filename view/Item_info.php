<?php
require("../controllers/Iteminfo_controller.php");
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
								
								<li class="dash-text"><a href="Cart.php" style="color: #50C878;">Item Details</a></li>
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


	

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">

				<?php
				$row = select_iteminfo_ctr($_GET["id"]);
					if($row){?>
				<div class="col-md-7">
					<div class="single-product-content">

					<div class="single-product-form">
						<form action="../action/Iteminfo_proc.php?id=<?=$row['id']?>" method="POST" enctype="multipart/form-data">
							<div class="col-md-8">

								<div class="single-product-img">
						
									<img src="<?= $row['image']?>" alt="image">
									<input type="hidden" name="image" value="<?= $row['image']?>">
								</div>
							</div>
							<br>
						<h3><?= $row['itemname']; ?> </h3>
						<p class="single-product-pricing"><?= "NGN ".$row['price']; ?> </p>
						<p>Type: <?= $row['itemtype']; ?> </p>
						<p>Quantity left: <?= $row['qty']; ?> </p>
						<p>Description: <?= $row['itemdesc']; ?> </p>
						<p>Address: <?= $row['address']; ?> </p>
						<p>--------------------------------------------------------------<p>
						<p style="font-style: italic;">Address on Map<p>

						<?php
				        
				        $encoded_address = urlencode($row['address']);
				        $map_url = "https://www.google.com/maps?q={$encoded_address}&output=embed";
    					?>

    					<iframe src="<?php echo $map_url ?>"></iframe>
						
						<p>--------------------------------------------------------------<p>
						<!-- <input type="hidden" name="image" value=""> -->
						<input type="hidden" name="itemname" value="<?= $row['itemname'] ?>">
						<input type="hidden" name="price" value="<?= $row['price'] ?>">
						<p>Quantity wanted</p>
						<input type="number" name="quantity" value="1">
						<input type="submit" name="add_to_cart" value="Add to Cart">
						</form>

						
						</div>
						
					</div>
				</div>
				<?php }

				?>

			</div>
		</div>
	</div>
	<!-- end single product -->

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