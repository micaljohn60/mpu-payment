<?php
 include 'security.php';
 define('DB_HOST','localhost');
 define('DB_USER','neptrior_mnine');
 define('DB_PASS','Pas$m9db');
 define('DB_NAME','neptrior_mninedb');
 
try{
    $connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
    echo "Connection Success";
}catch(PDOException $e){
    echo $e->getMessage();
    exit("Error: " .$e->getMessage());
} 

//Save Visa Information



// $name = $_POST['bill_to_forename'];
// $name1 = $_POST['bill_to_forename'];
// $quantity  = $_POST['quantity'];
// $item_name = $_POST["item_#_name"];
// $reference_number = $_POST["reference_number"];

$name =  "testing";
$name1 = "testing";
$quantity  = 1;
$item_name = "Testing"; 
$reference_number = "kel";
	
$sql = "INSERT INTO payment_visa(reference_number,username,quantity,item_name) VALUE (:refnumber,:username,:quantity,:itemname)";
$insert_query = $connection->prepare($sql);
$insert_query->bindParam(':refnumber',$refrence_number,PDO::PARAM_STR);
$insert_query->bindParam(':username',$name,PDO::PARAM_STR);
$insert_query->bindParam(':quantity',$quantity,PDO::PARAM_STR);
$insert_query->bindParam(':itemname',$item_name,PDO::PARAM_STR);
$insert_query->execute();







// End Save Visa Information
?>
<html>
<head>
    <title>Secure Acceptance - Payment Form</title> 
    <link rel="stylesheet" type="text/css" href="payment.css"/>
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/search.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/homecarousel.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/swipper-container.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/keyfeature.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/showcase.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/teaser.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/chatmsg.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/floatnavi.css">
    <link rel="stylesheet" type="text/css" href="https://m9estore.com/css/whatnews.css">
    <style>td span{font-size:20px;margin-right: 25px;width:auto !important;}
            th span{font-size:30px;margin-right: 25px;width:auto !important;}
            tr {height:50px;}
            header {background: #1a1f71;height: 100px!important;}
      </style> 
	
      
</head>
<body>
	
	
 <header id="vs-navigation-header" data-auth="false" data-locale="en_mm" data-area="header" role="banner">
<div id="vs-navigation-nav" class="vs-header-desktop" aria-label="Site" role="navigation">
    <div class="vs-container-fluid vs-header-container" style="display: flex;
    align-items: center;">
      <div class="vs-header-logo-wrapper  vs-global" style="width: 125px;margin: 30px 10px 10px 100px;">
        
        <a aria-label="Visa home" href="/">
          <img src="https://cdn.visa.com/cdn/assets/images/logos/visa/logo.png" alt="Visa logo">
        </a>
      </div>
      </div>
      </div>
    </header>
    <div style="margin-top: 100px;">
    <center>
	    

	    
	    
<form id="payment_confirmation" action="https://testsecureacceptance.cybersource.com/pay" method="post"/>
    
    <table>
    <tbody>
    <tr>
        <th style="text-align: right;">
            <span>Your Order ID <?php echo $_POST['order_title'] ?></span>
            
        </th>
        <th><span>- <?php echo $_POST['bill_to_email'] ?></span></th>
    </tr>
    <tr>
        <td style="text-align: right;"><span>Product Color</span></td>
        
        <td><span>- <?php echo $_POST['item_#_code']; ?></span></td>
    </tr>
     <tr>
        <td style="text-align: right;"><span>Quantity</span></td>
        
        <td><span>- <?php echo $_POST['quantity']; ?></span></td>
    </tr>
    <tr>
        <td style="text-align: right;"><span>Price</span></td>
        
        <td><span>- <?php echo $_POST['amount'];?><?php echo $_POST['currency']; ?></span></td>
    </tr>
    <tr>
        <td style="text-align: right;"><span>Name</span></td>
       
        <td><span>- <?php echo $_POST['bill_to_forename']; ?></span></td>
    </tr>
	    




    
    <tr>
        <td style="text-align: right;"><span>Your Address</span></td>
        
        <td><span>- <?php echo $_POST['bill_to_address_line1']; ?></span></td>
    </tr>
  <tr>
		<td style="text-align: right;"><span>Your Phone No.</span></td>
		
		<td><span>- <?php echo $_POST['bill_to_phone']; ?></span></td>
	</tr>
	
    <tr>
        <td style="text-align: right;"><span>Your email</span></td>
       
        <td><span>- <?php echo $_POST['bill_to_email']; ?></span></td>
    </tr>
    
    </tbody>


</table>
<?php
    foreach($_REQUEST as $name => $value) {
        $params[$name] = $value;
    }
?>

    <?php
        foreach($params as $name => $value) {
            echo "<input type=\"hidden\" id=\"" . $name . "\" name=\"" . $name . "\" value=\"" . $value . "\"/>\n";
        }
        echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . sign($params) . "\"/>\n";
    ?>
<div>
    

</div>
<div>
    <button style="
    background-color: #000 !important;
    width:150px;
    padding: 10px 24px 11px 24px;
    border-radius: 20px;
    margin-top:20px;
    margin-right:40px;
    margin-bottom:100px;
"><a href="https://m9estore.com/" style="color: #fff !important;">Cancel</a></button>
</div>
	    <input type="submit" id="btnsubmit" value="Process to Checkout" style="
    background-color: #000 !important;
    color: #fff !important;
    padding: 10px 24px 11px 24px;
    border-radius: 20px;
    margin-right: 40px;" 
	/>
</form>
</center>
</div>

</body>

</html>
