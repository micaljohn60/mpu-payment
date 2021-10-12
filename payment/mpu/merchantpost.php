
<?php
//DB details
include 'security.php';
$dbHost = 'localhost';
$dbUsername = 'neptrior_mnine';
$dbPassword = 'Pas$m9db';
$dbName = 'neptrior_mninedb';
//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($db->connect_error){
   die("Unable to connect database: " . $db->connect_error);
}

$req_reference_number = $_REQUEST["req_reference_number"];
$req_transaction_id = $_REQUEST["transaction_id"];
$req_card_number = $_REQUEST["req_card_number"];
$card_type_name = $_REQUEST["card_type_name"];
$reason_code = $_REQUEST["reason_code"];
$auth_amount = $_REQUEST["auth_amount"];
$req_amount = $_REQUEST["req_amount"];
$decision = $_REQUEST["decision"];


if(empty($req_reference_number) && empty($req_transaction_id) && empty($req_card_number) && empty($card_type_name) && empty($reason_code) && empty($auth_amount) && empty($req_amount) && empty($decision)){
 echo "Try Again";
}
else{
   $update = $db->query("UPDATE payment_visa SET transaction_id='$req_transaction_id',req_card_number='$req_card_number',reason_code='$reason_code',auth_amount='$auth_amount',req_amount='$req_amount',decision='$decision' WHERE reference_number='$req_reference_number' ");
   printf("Error message: %s\n", $mysqli->error);
}
// $sql_find_reference_number = "SELECT reference_number FROM payment_visa";
// $query_find_reference_number = $connection->prepare($sql_find_reference_number);
// $query_find_reference_number->bindParam(':refernum',$_REQUEST["req_reference_number"],PDO::PARAM_STR);
// $query_find_reference_number->execute();
// $lastInsertid = $connection->lastInsertId();
// $result = $query_find_reference_number->fetch(PDO::FETCH_ASSOC);
// $ans = $result['reference_number'];


 
?>


