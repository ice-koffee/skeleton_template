	
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

class Iteminfo_class extends db_connection
{


	//--INSERT--//

	function insert_iteminfo_class($order_id, $u_id, $invoice_no, $order_date){

		$query = "INSERT INTO `orders`( `order_id`, `u_id`, `invoice_no`, `order_date`) VALUES ('$order_id', '$u_id','$invoice_no','$order_date')";
		
		echo $query;
		
		return $this->db_query($query);

	}	
	
	//--SELECT--//

	function select_iteminfo_class($id){

		$row = $this->db_fetch_one("SELECT * FROM add_item WHERE `id` = $id");

		if (empty($row)){
			return false;
		}

		return $row;


	}	




	//--UPDATE--//



	//--DELETE--//
	

}



?>