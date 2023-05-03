<?php

require(dirname(__FILE__)."/../classes/Myitems_class.php");

// require "/classes/Myitems_class.php";

class ReConnectTest extends \PHPUnit\Framework\TestCase {


	public function testDelete_Items() {

		$myClass = new  Myitems_class();

		$result = $myClass->delete_myitems_class(3);


		$this->assertTrue($result);

	}


	public function testUpdate_Items() {

		$Class = new  Myitems_class();

		$result = $Class->update_myitems_class(3, "New Name", "Glass", 10, 5, "This is an update test", "456 Second Ave", "newtest.jpg");

		$this->assertTrue($result);

	}


	public function testSelect_Items() {

		$my = new  Myitems_class();

		$result = $my->select_itemdet_class(-1);

		$this->assertFalse($result);

	}


	public function testSelectmy_Items() {

		$my = new  Myitems_class();

		$_SESSION['u_id'] = 999;

		$result = $my->select_myitems_class(-1);

		$this->assertFalse($result);

	}


}




?>