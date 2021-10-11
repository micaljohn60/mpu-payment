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
$fetch_sql = "SELECT * FROM payment_visa";
$fetch_query = $connection->prepare($fetch_sql);
$fetch_query->execute();
$result = $fetch_query->fetchAll(PDO::FETCH_OBJ);
foreach($result as $row){
   $ans = $result['reference_number'];
   echo $ans;
}
$req_reference_number = $_REQUEST["req_reference_number"];
$req_transaction_id = $_REQUEST["transaction_id"];
$req_card_number = $_REQUEST["req_card_number"];
$card_type_name = $_REQUEST["card_type_name"];
$reason_code = $_REQUEST["reason_code"];
$auth_amount = $_REQUEST["auth_amount"];
$req_amount = $_REQUEST["req_amount"];
$decision = $_REQUEST["req_reference_number"];
$name = "yelinnaung@dev";
$quantity = 20;



$sql_insert_response = "INSERT INTO payment_visa(reference_number,username,quantity,transaction_id,req_card_number,card_type_name,reason_code,auth_amount,req_amount,decision) VALUE (:referencenub,:username,:quantity,:transaction_id,:req_card_number,:card_type_name,:reason_code,:auth_amount,:req_amount,:decision)";
$insert_response_query = $connection->prepare($sql_insert_response);
$insert_response_query->bindParam(':referencenub',$req_reference_number,PDO::PARAM_STR);
$insert_response_query->bindParam(':username',$name,PDO::PARAM_STR);
$insert_response_query->bindParam(':quantity',$quantity,PDO::PARAM_STR);
$insert_response_query->bindParam(':transaction_id',$req_transaction_id,PDO::PARAM_STR);
$insert_response_query->bindParam(':req_card_number',$req_card_number,PDO::PARAM_STR);
$insert_response_query->bindParam(':card_type_name',$card_type_name,PDO::PARAM_STR);
$insert_response_query->bindParam(':reason_code',$reason_code,PDO::PARAM_STR);
$insert_response_query->bindParam(':auth_amount',$auth_amount,PDO::PARAM_STR);
$insert_response_query->bindParam(':req_amount',$req_amount,PDO::PARAM_STR);
$insert_response_query->bindParam(':decision',$decision,PDO::PARAM_STR);
$insert_response_query->execute();


?>


