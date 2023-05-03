<?php 

require_once("../controllers/Iteminfo_controller.php");

session_start();


	
	if(isset($_POST["add_to_cart"])){
		$id = $_GET["id"];

		$session_array = array(
			'id' => $_GET['id'],
			'image' => $_POST['image'],
			'itemname' => $_POST['itemname'],
			'quantity' => $_POST['quantity'],
			'price' => $_POST['price']

		);

		
		$_SESSION["cart"][$id]= $session_array;
		

		$ItemInfo = select_iteminfo_ctr($id);


		if($ItemInfo == true){
			echo 
            header("Location: ../view/Dashboard.php");
	  		
	  	}
	}


if(isset($_GET['action'])){

                    if($_GET['action'] == "remove"){

                        foreach ($_SESSION['cart'] as $key => $value) {
                            
                            if ($value['id'] == $_GET['id']) {
                                unset($_SESSION['cart'][$key]);
                            }
                        }
                    }

                    header("Location: ../view/Cart.php");
                }




















die();












?>

