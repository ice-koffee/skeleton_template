<?php

require("../controllers/Login_controller.php");
session_start();

 if(isset($_POST["submit"])){
	
	$username;
	$password;

 	
	 	$username = $_POST['username'];
	  	$password = md5($_POST['password']);

	  	$userLogin = select_userlogin_ctr($username, $password);

	  	if($userLogin == true){
	  		$_SESSION['u_id'] = $userLogin["id"];
	  		header("location: ../view/Homepage.php");
	  	}
	  	else{
	  		echo "<script>alert('username or password is incorrect')</script>";
	  		
	  	}

		
 	

 	}


 


?>