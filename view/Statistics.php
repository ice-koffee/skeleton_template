<?php
require("../controllers/Statistics_controller.php");

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

	<script src=https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js>

    </script>

</head>
<body >


<div class="hero-area login-bg">
<div class="container">
			<div class="row">

				<div class="col-lg-10 offset-lg-4 text-center">

					<div class="hero-text">

						<div class="hero-text-tablecell">
							<br>
							<p class="subtitle">Number of Users:</p>

							<?php $rows = select_statistics_ctr(); 
							if ($rows == false){
								echo "0";
							}

							else{
								if($user_total = $rows["count"]){
									echo '<h1>'.$user_total.'</h1>';
								}

								else{
									echo "0";
								}
							}

							?>
							

							<br><br>

							<p class="subtitle">Number of materials for recycling:</p>


							<div style="height: 300px; width: 300px; margin-left: 300px;">
							<div>
						  <canvas id="myChart"></canvas>
						</div>

						<?php $row_plastic = select_plastic_count_ctr(); 
								$row_metal = select_metal_count_ctr();
								$row_paper = select_paper_count_ctr();
								$row_other = select_others_count_ctr();

						?>

								<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

								<script>
								  const ctx = document.getElementById('myChart');

								  new Chart(ctx, {
								    type: 'pie',
								    data: {
								      labels: ['Plastic', 'Metal', 'Paper', 'Other'],
								      datasets: [{
								        label: '# Recyled',
								        data: [<?php echo $row_plastic["plastic_count"]?>, <?php echo $row_metal["metal_count"]?>, <?php echo $row_paper["paper_count"]?>, <?php echo $row_other["other_count"]?>],
								        borderWidth: 1
								      }]
								    },
								    options: {
								      scales: {
								        y: {
								          beginAtZero: true
								        }
								      }
								    }
								  });
								</script>
	
					 		</div>
							

					
						</div>

					</div>


				</div>

			</div>

</div>
</div>




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