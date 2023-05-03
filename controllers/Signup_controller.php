
	<?php
include("../classes/Signup_class.php");


/**
 * This folder just passes the data to the class(model) functions
 * */
//sanitize data



function cleanText($data) 
{
  $data = trim($data);
  
  return $data;
}




//--INSERT--//
function insert_usersignup_ctr($fname, $lname, $email, $username, $password){


$signup = new  Signup_class();


 $userSignup = $signup->insert_usersignup_class($fname, $lname, $email, $username, $password);

 if ($userSignup == false){
  return $userSignup;
}
return true;

  } 



//--SELECT--//

//--UPDATE--//

//--DELETE--//


?>