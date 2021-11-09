
<?php

define('DB_HOST','localhost');
define('DB_USER','neptrior_mnine');
define('DB_PASS','Pas$m9db');
define('DB_NAME','neptrior_mninedb');
try{
    $connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
}catch(PDOException $e){
    exit("Error: " .$e->getMessage());
} 

$decision = $_REQUEST["decision"];


if($decision == "ACCEPT" || $decision == "DECLINE"){
    $req_name = $_REQUEST["req_item_1_passenger_forename"];
$req_item_name = $_REQUEST["req_item_1_name"];
$req_item_specification = $_REQUEST["req_item_1_code"];
$req_item_quantity = $_REQUEST["req_item_1_quantity"];
$req_reference_number = $_REQUEST["req_reference_number"];
$req_transaction_id = $_REQUEST["transaction_id"];
$req_card_number = $_REQUEST["req_card_number"];
$card_type_name = $_REQUEST["card_type_name"];
// $reason_code = $_REQUEST["reason_code"];
$auth_amount = $_REQUEST["auth_amount"];
$req_amount = $_REQUEST["req_amount"];
$sql_insert_response = "INSERT INTO payment_visa_confirmation(req_bill_to_forename,req_item_name,req_item_color,req_item_quantity,req_reference_number,transaction_id,req_card_number,card_type_name,auth_amount,req_amount,decision) VALUE (:reqname,:reqitemname,:reqitemspecification,:reqitemquantity,:referencenub,:transaction_id,:req_card_number,:card_type_name,:auth_amount,:req_amount,:decision)" ;
$insert_response_query = $connection->prepare($sql_insert_response);
$insert_response_query->bindParam(':reqname',$req_name,PDO::PARAM_STR);
$insert_response_query->bindParam(':reqitemname',$req_item_name,PDO::PARAM_STR);
$insert_response_query->bindParam(':reqitemspecification',$req_item_specification,PDO::PARAM_STR);
$insert_response_query->bindParam(':reqitemquantity',$req_item_quantity,PDO::PARAM_STR);
$insert_response_query->bindParam(':referencenub',$req_reference_number,PDO::PARAM_STR);
$insert_response_query->bindParam(':transaction_id',$req_transaction_id,PDO::PARAM_STR);
$insert_response_query->bindParam(':req_card_number',$req_card_number,PDO::PARAM_STR);
$insert_response_query->bindParam(':card_type_name',$card_type_name,PDO::PARAM_STR);
$insert_response_query->bindParam(':auth_amount',$auth_amount,PDO::PARAM_STR);
$insert_response_query->bindParam(':req_amount',$req_amount,PDO::PARAM_STR);
$insert_response_query->bindParam(':decision',$decision,PDO::PARAM_STR);
$insert_response_query->execute();
}if($decision == "CANCEL"){
    
    $req_name = $_REQUEST["req_item_1_passenger_forename"];
$req_item_name = $_REQUEST["req_item_1_name"];
$req_item_specification = $_REQUEST["req_item_1_code"];
$req_item_quantity = $_REQUEST["req_item_1_quantity"];
$req_reference_number = $_REQUEST["req_reference_number"];

    
$sql_insert_response = "INSERT INTO payment_visa_confirmation(req_bill_to_forename,req_item_name,req_item_color,req_item_quantity,req_reference_number,transaction_id,req_card_number,card_type_name,auth_amount,req_amount,decision) VALUE (:reqname,:reqitemname,:reqitemspecification,:reqitemquantity,:referencenub,:transaction_id,:req_card_number,:card_type_name,:auth_amount,:req_amount,:decision)" ;
$insert_response_query = $connection->prepare($sql_insert_response);
$insert_response_query->bindParam(':reqname',$req_name,PDO::PARAM_STR);
$insert_response_query->bindParam(':reqitemname',$req_item_name,PDO::PARAM_STR);
$insert_response_query->bindParam(':reqitemspecification',$req_item_specification,PDO::PARAM_STR);
$insert_response_query->bindParam(':reqitemquantity',$req_item_quantity,PDO::PARAM_STR);
$insert_response_query->bindParam(':referencenub',$req_reference_number,PDO::PARAM_STR);
$insert_response_query->bindParam(':transaction_id',"No Data",PDO::PARAM_STR);
$insert_response_query->bindParam(':req_card_number',"No Data",PDO::PARAM_STR);
$insert_response_query->bindParam(':card_type_name',"No Data",PDO::PARAM_STR);
$insert_response_query->bindParam(':auth_amount',"No Data",PDO::PARAM_STR);
$insert_response_query->bindParam(':req_amount',"No Data",PDO::PARAM_STR);
$insert_response_query->bindParam(':decision',$decision,PDO::PARAM_STR);
$insert_response_query->execute();
}

