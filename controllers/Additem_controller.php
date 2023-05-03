
	<?php
include_once("../classes/Additem_class.php");


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
function insert_additem_ctr($u_id, $itemname, $itemtype, $price, $qty, $itemdesc, $address, $newImageName){


$additem = new  Additem_class();


 $AddItem = $additem->insert_additem_class($u_id, $itemname, $itemtype, $price, $qty, $itemdesc, $address, $newImageName);

if ($AddItem == false){
  return $AddItem;
}
return true;

  } 



//--SELECT--//
function select_additem_ctr(){


$additem = new  Additem_class();


 $AddItem = $additem->select_additem_class();


 return $AddItem;
}


//--UPDATE--//

//--DELETE--//

?>