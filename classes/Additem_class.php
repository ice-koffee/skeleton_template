	
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

class Additem_class extends db_connection
{


	//--INSERT--//
	function insert_additem_class($u_id, $itemname, $itemtype, $price, $qty, $itemdesc, $address, $newImageName){

		

		$query = "INSERT INTO `add_item`( `u_id`, `itemname`, `itemtype`, `price`, `qty`, `itemdesc`,`address`, `image`) VALUES ('$u_id', '$itemname','$itemtype','$price','$qty','$itemdesc', '$address', '$newImageName')";
		
		echo $query;
		
		return $this->db_query($query);


		}	


	//--SELECT--//
	function select_additem_class(){

		$rows = $this->db_fetch_all("SELECT * FROM add_item ORDER BY id DESC");

		if (empty($rows)){
			return false;
		}

		return $rows;
		
	}



	//--UPDATE--//



	//--DELETE--//

		}



?>