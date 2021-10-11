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

    $name = $_REQUEST['bill_to_forename'];
    $reference = $_REQUEST['quantity'];
    $quantity  = $_REQUEST['reference_number'];
    


$sql = "INSERT INTO payment_visa(reference_number,username,quantity,transaction_id,req_card_number,card_type_name,reason_code,auth_amount,req_amount,decision) VALUE (:reference_number,:username,:quantity,:transaction_id,:req_card_number,:card_type_name,:reason_code,:auth_amount,:req_amount,:decision)";
$insert_query = $connection->prepare($sql);
$insert_query->bindParam(':reference_number',$name,PDO::PARAM_STR);
$insert_query->bindParam(':username',$reference,PDO::PARAM_STR);
$insert_query->bindParam(':quantity',$quantity,PDO::PARAM_STR);
$insert_query->bindParam(':transaction_id',PDO::PARAM_NULL);
$insert_query->bindParam(':req_card_number',PDO::PARAM_NULL);
$insert_query->bindParam(':card_type_name',PDO::PARAM_NULL);
$insert_query->bindParam(':reason_code',PDO::PARAM_NULL);
$insert_query->bindParam(':auth_amount',PDO::PARAM_NULL);
$insert_query->bindParam(':req_amount',PDO::PARAM_NULL);
$insert_query->bindParam(':decision',PDO::PARAM_NULL);
$insert_query->execute();

?>
