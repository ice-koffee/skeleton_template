<?php
require_once("../controllers/Additem_controller.php");
require_once("../controllers/Searchitem_controller.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

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
<body class="login-bg">
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<a href="Add_item.php"><button class="add-item-button">+ Add Item</button></a>
						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								
								<li class="dash-text"><a href="Dashboard.php">Dashboard</a></li>
								<li class="dash-text"><a href="Myitems.php">My Items</a></li>
								
								</li>
								
								
										<li><a style="color: #ffffff;" href="Cart.php">Cart</a></li>
						

										<li>
									<div class="header-icons">
										<a class="mobile-hide search-bar-icon" style="color: #ffffff;" href="#"><i class="fas fa-search"></i>Search by item type</a>
									</div>
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

	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
								<form action="../view/Dashboard_search.php" method="GET">
									<input type="text" placeholder="e.g. Plastic" name="itemtype" value="">
									<input type="submit" name="submit" value="Search"><i class="fas fa-search"></i>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<br>
	<br>
	<br>

	
		


	<!-- items -->
	
		<div class="container">
		


     
        <section class="dashboard-display">
			<div class="dash-prod">



				<?php $rows = select_additem_ctr();
				if ($rows == false){
					echo "No available items";
				}

				else{

				foreach($rows as $row) : ?>
				   <!--  product card start -->
				<div class="prod-card" >
					<div class="prod-image"><img src="<?php echo $row['image']; ?>" alt=""></div>
					<div class="prod-desc"> <?php echo $row["itemname"]; ?></div>		

					<div class="prod-box">
						<div class="prod-price"><?php echo 'Price: NGN '.$row["price"]; ?></div>
						<a href=<?php $id = $row["id"]; echo "\"Item_info.php?id=$id\"" ?>><button class="buy-button">Buy</button></a>
					</div>
				</div>

				<?php endforeach; }?>
				
			</div>
		
		</section>
		
			</div>

			
		</div>
	</div>
	<!-- end products -->

	

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