
	<?php
include_once("../classes/Searchitem_class.php");


/**
 * This folder just passes the data to the class(model) functions
 * */
//sanitize data




//--INSERT--//



//--SELECT--//
function select_searchitem_ctr($itemtype){


$searchitem = new  Searchitem_class();


 $SearchItem = $searchitem->select_searchitem_class($itemtype);


 return $SearchItem;
}


//--UPDATE--//

//--DELETE--//

?>