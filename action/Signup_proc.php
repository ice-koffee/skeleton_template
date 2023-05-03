<?php

require("../controllers/Signup_controller.php");



	$fname;
	$lname;
	$email;
	$username;
	$password;

	$fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $email = $_GET['email'];
    $username = $_GET['username'];
    $password = md5($_GET['password']);

    echo $fname;

    $userSignup = insert_usersignup_ctr($fname, $lname, $email, $username, $password);

    if($userSignup == true){
	  		header("location: ../view/Login_user.php");
	  	}
	  	


?>