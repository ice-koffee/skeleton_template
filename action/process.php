<?php
require("../controllers/Iteminfo_controller.php");
session_start();


$u_id = $_SESSION['u_id'];
$email =$_POST['email-address'];
$amount =$_POST['amount5'];
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL =>"https://api.paystack.co/transaction/verify/".$_GET['reference'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_cd22aa0dd31f43894ea5f58a76a918f79d43dc4d",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }



$url = "https://api.paystack.co/transaction/verify/".$_GET['reference'];

$fields = [

    'email-address' => "$email-address",
    'amount5' => $amount
];

$fields_string = http_build_query($fields);


// Open Connection
$ch = curl_init();
//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_test_f22be79b58abd7be4cf35b3a710aee6da9462f94",
    "Cache-Control: no-cache",
));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$order_id = $_POST['order_id'];
$u_id = $_SESSION['u_id'];
$invoice_no = mt_rand(100, 1000);
$order_date = date('Y/m/d');


$InsertItem = insert_iteminfo_ctr($order_id, $u_id, $invoice_no, $order_date);

echo $InsertItem;

if($InsertItem == true){
            echo "Order confirmed";
      }

      else{
        echo "Order not confirmed";
      }



?>