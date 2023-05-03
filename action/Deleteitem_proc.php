<?php

require("../controllers/Myitems_controller.php");


$id = $_POST['id'];

$MyItems_dlt = delete_myitems_ctr($id);


if($MyItems_dlt == true){
           header("Location: ../view/Myitems.php");

	 }



?>