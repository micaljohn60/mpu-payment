<?php 
 include 'security.php';
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

$sql_insert_response = "INSERT INTO payment_visa(transaction_id,req_card_number,card_type_name,reason_code,auth_amount,req_amount,decision) VALUE (:transaction_id,:req_card_number,:card_type_name,:reason_code,:auth_amount,:req_amount,:decision)";
$insert_response_query = $connection->prepare($sql_insert_response);
$insert_response_query->bindParam(':transaction_id',$req_transaction_id,PDO::PARAM_STR);
$insert_response_query->bindParam(':req_card_number',$req_card_number,PDO::PARAM_STR);
$insert_response_query->bindParam(':card_type_name',$card_type_name,PDO::PARAM_STR);
$insert_response_query->bindParam(':reason_code',$reason_code,PDO::PARAM_STR);
$insert_response_query->bindParam(':auth_amount',$auth_amount,PDO::PARAM_STR);
$insert_response_query->bindParam(':req_amount',$req_amount,PDO::PARAM_STR);
$insert_response_query->bindParam(':decision',$decision,PDO::PARAM_STR);
$insert_response_query->execute();


$ref_select_sql = "SELECT reference_number FROM payment_visa";
$ref_select_query = $connection->prepare($ref_select_sql);
$ref_select_query->execute();
$result = $ref_select_query->fetch(PDO::FETCH_ASSOC);
$ans = $result['reference_number'];

if($ans == $req_reference_number){
$sql = "UPDATE payment_visa SET (
transaction_id = :transaction_id,
req_card_number = :req_card_number,
card_type_name = :card_type_name,
reason_code = :reason_code,
auth_amount = :auth_amount,
req_amount = :req_amount,
decision = :decision)";
$insert_query = $connection->prepare($sql);
$insert_query->bindParam(':transaction_id',$req_transaction_id,PDO::PARAM_STR);
$insert_query->bindParam(':req_card_number',$req_card_number,PDO::PARAM_STR);
$insert_query->bindParam(':card_type_name',$card_type_name,PDO::PARAM_STR);
$insert_query->bindParam(':reason_code',$reason_code,PDO::PARAM_STR);
$insert_query->bindParam(':auth_amount',$auth_amount,PDO::PARAM_STR);
$insert_query->bindParam(':req_amount',$req_amount,PDO::PARAM_STR);
$insert_query->bindParam(':decision',$decision,PDO::PARAM_STR);
$insert_query->execute();
}

?>


