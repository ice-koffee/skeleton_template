	
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

class Statistics_class extends db_connection
{



	//--INSERT--//

 

	//--SELECT--//
	function select_statistics_class(){

		$rows = $this->db_fetch_one("SELECT count(*) as count FROM usersignup");

		if (empty($rows)){
			return false;
		}

		return $rows;
	
		
	}


	function select_plastic_count_class(){

		$row_plastic = $this->db_fetch_one("SELECT COUNT(*) as plastic_count FROM add_item WHERE itemtype='Plastic'");

		if (empty($row_plastic)){
			return false;
		}

		return $row_plastic;


	}




	function select_metal_count_class(){

		$row_metal = $this->db_fetch_one("SELECT COUNT(*) as metal_count FROM add_item WHERE itemtype='Metal'");

		if (empty($row_metal)){
			return false;
		}

		return $row_metal;
		
	}
		

	function select_paper_count_class(){

		$row_paper = $this->db_fetch_one("SELECT COUNT(*) as paper_count FROM add_item WHERE itemtype='Paper'");

		if (empty($row_paper)){
			return false;
		}

		return $row_paper;
		
	}


	function select_others_count_class(){
		
		$exclude_values = array("Plastic", "Metal", "Paper");

		
		$where = "";
		foreach($exclude_values as $value) {
		    $where .= "itemtype <> '$value' AND ";
		}
		$where = rtrim($where, "AND ");

		
		$row_other = $this->db_fetch_one("SELECT COUNT(*) as other_count FROM add_item WHERE " . $where);

		if (empty($row_other)){
			return false;
		}

		return $row_other;
		
	}



	//--UPDATE--//



	//--DELETE--//

		}

		





?>