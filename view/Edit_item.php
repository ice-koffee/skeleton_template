<?php
require_once("../controllers/Myitems_controller.php");

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

<body class="login-bg">

	 <br>
	 <div class="container">
			<div class="row">
					<div class="col-lg-9 offset-lg-2 text-center">
					<div class="login-text">
						
						<h2>Item Details</h2>
						</div>
						<br>
						<?php

							$id = $_GET['id'];

							$rows = select_itemdet_ctr($id);

						?>
						<div class="signup-form">
						<form action="../action/Myitems_proc.php" method="POST" enctype="multipart/form-data">
							<label class="signuptext">Name of the Item: </label>
							<p>
								<input type="text" value="<?php echo $rows['itemname'] ?>" name="itemname">
							</p>

							<label class="signuptext">Type of Item: </label>
							<p>
								<input type="text" value="<?php echo $rows['itemtype'] ?>" name="itemtype">
							</p>

							<label class="signuptext">Price per unit </label>
							<p>
								<input type="text" value="<?php echo $rows['price'] ?>" name="price" >
							</p>

							<label class="signuptext">Quantity: </label>
							<p>
								<input type="text" value="<?php echo $rows['qty'] ?>" name="qty">
							</p>

							<label class="signuptext">Description: </label>
							<p>
								<textarea rows="4" cols="54" value="<?php echo $rows['itemdesc'] ?>" name="itemdesc"></textarea>
							</p>

							<label class="signuptext">Address: </label>
							<p>
								<input type="text" value="<?php echo $rows['address'] ?>" name="address">
							</p>

							<label class="signuptext">Image upload: </label>
							
      						<input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""> <br><br>
      						<input name="submit" value="" hidden>

      						<input type="hidden" name="id" value="<?php echo $_GET['id']?>">
							<p><input type="submit" value="Submit"></p><br>
						</form>
						</div>
						
						
						
						
						

</body>