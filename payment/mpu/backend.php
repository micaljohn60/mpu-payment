<?php

$merchantID = $_REQUEST["merchantID"];
$respCode = $_REQUEST["respCode"];
$pan = $_REQUEST["pan"];
$amount = $_REQUEST["amount"];
$payamount = $amount / 100;
$invoiceNo = $_REQUEST["invoiceNo"];
$tranRef = $_REQUEST["tranRef"];
$approvalCode = $_REQUEST["approvalCode"]; 
$dateTime = $_REQUEST["dateTime"];
$status = $_REQUEST["status"];
$userDefined1 = $_REQUEST["userDefined1"];
$userDefined2 = $_REQUEST["userDefined2"];
$userDefined3 = $_REQUEST["userDefined3"];
$hashValue = $_REQUEST["hashValue"];

if (empty($hashValue)) {
    header('Location: https://m9estore.com/');
  }
  else {
            include_once 'db.php';
       
        $insert = $db->query("INSERT payments (merchantID,respCode,Card,amount,invoiceNo,tranRef,approvalCode,DTime,status,userDefined1,userDefined2,userDefined3,hashvalue) VALUES ('".$merchantID."','".$respCode."','".$pan."','".$payamount."','".$invoiceNo."','".$tranRef."','".$approvalCode."','".$dateTime."','".$status."','".$userDefined1."','".$userDefined2."','".$userDefined3."','".$hashValue."')");

      $insert2 = $db->query("UPDATE order_shippings SET status='$status' WHERE shipping_phone='$userDefined2' ");
  }

?>