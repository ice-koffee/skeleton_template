	
<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*This folder handles all the sql query for each service
*/
/**
 *@author Isioma Ekejiuba
 *
 */

class Searchitem_class extends db_connection
{


	//--INSERT--//



	//--SELECT--//
	function select_searchitem_class($itemtype){
		
		$rows = $this->db_fetch_all("SELECT * FROM add_item WHERE itemtype LIKE '%$itemtype%'");

		if (empty($rows)){
			return false;
		}

		return $rows;
		
	}

		


	//--UPDATE--//



	//--DELETE--//

		}




?>