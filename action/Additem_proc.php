<?php

require_once("../controllers/Additem_controller.php");


session_start();

var_dump($_SESSION);
if(isset($_POST["submit"])){

	$u_id = isset($_SESSION['u_id'])? $_SESSION['u_id'] : null;
    $itemname = $_POST['itemname'];
    $itemtype = $_POST['itemtype'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $itemdesc = $_POST['itemdesc'];
    $address = $_POST['address'];
    

    if($_FILES['image']['error'] === 4){
            echo " Image Does not exist";
    	echo
    	"<script> alert('Image Does Not Exist'): <script>";
    }

    else{
    	$fileName = $_FILES['image']['name'];
    	$fileSize = $_FILES['image']['size'];
    	$tmpName = $_FILES['image']['tmp_name'];

    	$validImageExtension = ['jpg', 'jpeg', 'png'];
    	$imageExtension = explode(".", $fileName);
    	$imageExtension = strtolower(end($imageExtension));
    	if(!in_array($imageExtension, $validImageExtension)){
            echo "Invalid Image Extension";
    		echo
    		"<script> alert('Invald Image Extension'): <script>";
    	}


    	else{
    		$newImageName = uniqid();
    		$newImageName .= '.'.$imageExtension;

    		move_uploaded_file($tmpName, '../img/' . $newImageName);

            $AddItem = insert_additem_ctr($u_id, $itemname, $itemtype, $price, $qty, $itemdesc, $address, '../img/' . $newImageName);



    		if($AddItem == true){
            header("Location: ../view/Dashboard.php");
	  	}

    	}
    }
   

}





?>