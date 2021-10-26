
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

$req_reference_number = $_REQUEST["req_reference_number"];
$req_transaction_id = $_REQUEST["transaction_id"];
$req_card_number = $_REQUEST["req_card_number"];
$card_type_name = $_REQUEST["card_type_name"];
$reason_code = $_REQUEST["reason_code"];
$auth_amount = $_REQUEST["auth_amount"];
$req_amount = $_REQUEST["req_amount"];
$decision = $_REQUEST["decision"];

$sql_insert_response = "UPDATE payment_visa SET reference_number = :referencenub,transaction_id  = :transaction_id,req_card_number = :req_card_number,card_type_name = :card_type_name,reason_code = :reason_code,auth_amount = :auth_amount,req_amount = :req_amount,decision = :decision WHERE reference_number = :referencenub";
$insert_response_query = $connection->prepare($sql_insert_response);
$insert_response_query->bindParam(':referencenub',$req_reference_number,PDO::PARAM_STR);
$insert_response_query->bindParam(':transaction_id',$req_transaction_id,PDO::PARAM_STR);
$insert_response_query->bindParam(':req_card_number',$req_card_number,PDO::PARAM_STR);
$insert_response_query->bindParam(':card_type_name',$card_type_name,PDO::PARAM_STR);
$insert_response_query->bindParam(':reason_code',$reason_code,PDO::PARAM_STR);
$insert_response_query->bindParam(':auth_amount',$auth_amount,PDO::PARAM_STR);
$insert_response_query->bindParam(':req_amount',$req_amount,PDO::PARAM_STR);
$insert_response_query->bindParam(':decision',$decision,PDO::PARAM_STR);
$insert_response_query->execute();
