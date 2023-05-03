	
<?php
//connect to database class
require("../settings/db_class.php");

/**
*This folder handles all the sql query for each service
*/
/**
 *@author Isioma Ekejiuba
 *
 */

class Signup_class extends db_connection
{


	//--INSERT--//

  	
	function insert_usersignup_class($fname, $lname, $email, $username, $password){


		$query = "INSERT INTO `usersignup`(`fname`, `lname`, `email`, `username`, `password`) VALUES ('$fname','$lname','$email','$username','$password')";
		

		return $this->db_query($query);

		

	}	

	//--SELECT--//



	//--UPDATE--//



	//--DELETE--//
		

		

}


?>