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

echo "Hello World";

echo $_POST['name'];

    $name = $_POST['name'];
    $reference = $_POST['quantity'];
    $quantity  = $_POST['reference_number']; 

$sql = "INSERT INTO payment_visa(reference_number,username,quantity) VALUE (:reference_number,:username,:quantity)";
$insert_query = $connection->prepare($sql);
$insert_query->bindParam(':reference_number',$name,PDO::PARAM_STR);
$insert_query->bindParam(':username',$reference,PDO::PARAM_STR);
$insert_query->bindParam(':quantity',$quantity,PDO::PARAM_STR);
$insert_query->execute();

?>
