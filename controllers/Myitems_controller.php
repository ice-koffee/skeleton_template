
	<?php
include("../classes/Myitems_class.php");


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
function select_myitems_ctr(){


$myitems = new  Myitems_class();


 $MyItems = $myitems->select_myitems_class();


 return $MyItems;
}


function select_itemdet_ctr($id){

  $myitemsdet = new Myitems_class();

  $MyItemsdet = $myitemsdet->select_itemdet_class($id);

  return $MyItemsdet;
}


//--UPDATE--//

function update_myitems_ctr($id, $itemname, $itemtype, $price, $qty, $itemdesc, $address, $newImageName){

  $myitems_upt = new  Myitems_class();

 $MyItems_upt = $myitems_upt->update_myitems_class($id, $itemname, $itemtype, $price, $qty, $itemdesc, $address, $newImageName);

if ($MyItems_upt == false){
  return false;
}
return true;

 

}

//--DELETE--//
function delete_myitems_ctr($id){

  $myitems_dlt = new  Myitems_class();


 $MyItems_dlt = $myitems_dlt->delete_myitems_class($id);

if ($MyItems_dlt == false){
  return $MyItems_dlt;
}
return true;



}

?>