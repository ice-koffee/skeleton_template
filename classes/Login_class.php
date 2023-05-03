	
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

class Login_class extends db_connection
{

	//--INSERT--//
	
	//--SELECT--//
	function select_userlogin_class($username, $password){
		
		$query = "SELECT  * FROM usersignup WHERE username = '".$username."' AND password = '".$password."'";
		
		return $this->db_fetch_one($query);

	}	




	//--UPDATE--//



	//--DELETE--//
	

}



?>