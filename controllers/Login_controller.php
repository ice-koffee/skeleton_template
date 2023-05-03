
	<?php
include("../classes/Login_class.php");


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


//--SELECT--//



function select_userlogin_ctr($username, $password){


$login = new  Login_class();


$userLogin = $login->select_userlogin_class($username,$password);


  return $userLogin;

return true;

  } 

//--UPDATE--//

//--DELETE--//

?>