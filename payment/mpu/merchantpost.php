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
// $req_reference_number = "VemoNerI2092";
$req_reference_number = $_REQUEST["req_reference_number"];
echo $req_reference_number;
$req_transaction_id = $_REQUEST["transaction_id"];
$req_card_number = $_REQUEST["req_card_number"];
$card_type_name = $_REQUEST["card_type_name"];
$reason_code = $_REQUEST["reason_code"];
$auth_amount = $_REQUEST["auth_amount"];
$req_amount = $_REQUEST["req_amount"];
$decision = $_REQUEST["decision"];
// $name = "yelinnaung@dev";
// $quantity = 20;

$sql_find_reference_number = "SELECT reference_number FROM payment_visa WHERE reference_number =:refernum";
$query_find_reference_number = $connection->prepare($sql_find_reference_number);
$query_find_reference_number->bindParam(':refernum',$_REQUEST["req_reference_number"],PDO::PARAM_STR);
$query_find_reference_number->execute();
$result = $query_find_reference_number->fetchAll(PDO::FETCH_OBJ);
foreach($result as $row){
  $ref_number = $row->reference_number;
  $username = $row->username;
  $quantity = $row->quantity;
 
 if($ref_number == $_REQUEST["req_reference_number"]){
$sql_update_response = "UPDATE payment_visa SET username = :username, quantity = :quantity, transaction_id = :transaction_id,req_card_number = :req_card_number,card_type_name = :card_type_name,reason_code = :reason_code,auth_amount = :auth_amount,req_amount = :req_amount,decision = :decision WHERE reference_number = :reqnumber";
$query_update_response = $connection->prepare($sql_update_response);
$query_update_response->bindParam(':reqnumber',$req_reference_number,PDO::PARAM_STR);
$query_update_response->bindParam(':username',$username,PDO::PARAM_STR);
  $query_update_response->bindParam(':quantity',$quantity,PDO::PARAM_STR);
$query_update_response->bindParam(':transaction_id',$req_transaction_id,PDO::PARAM_STR);
$query_update_response->bindParam(':req_card_number',$req_card_number,PDO::PARAM_STR);
$query_update_response->bindParam(':card_type_name',$card_type_name,PDO::PARAM_STR);
$query_update_response->bindParam(':reason_code',$reason_code,PDO::PARAM_INT);
$query_update_response->bindParam(':auth_amount',$auth_amount,PDO::PARAM_INT);
$query_update_response->bindParam(':req_amount',$req_amount,PDO::PARAM_INT);
$query_update_response->bindParam(':decision',$decision,PDO::PARAM_STR);
$query_update_response->execute();
 }else{
   echo "Not Updated";
}
}
?>


