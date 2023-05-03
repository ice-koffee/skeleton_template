
	<?php
include_once("../classes/Iteminfo_class.php");


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

function insert_iteminfo_ctr($order_id, $u_id, $invoice_no, $order_date){


$insertitem = new  Iteminfo_class();


 $InsertItem = $insertitem->insert_iteminfo_class($order_id, $u_id, $invoice_no, $order_date);

if ($InsertItem == false){
  return $InsertItem;
}
return true;

  } 



//--SELECT--//
function select_iteminfo_ctr($id){


$iteminfo = new  Iteminfo_class();


 $ItemInfo = $iteminfo->select_iteminfo_class($id);


 return $ItemInfo;
}


//--UPDATE--//

//--DELETE--//

?>