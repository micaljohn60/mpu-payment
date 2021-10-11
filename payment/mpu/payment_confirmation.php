<?php
 include 'security.php'
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
	<script>
	console.log("Hello WOld");
	
	console.log("Hello World Above Function");
	
function onClickPayment(){
	console.log("Hello World in Function");
	
// 	 document.getElementById("payment_confirmation").submit();
//     	document.getElementById("visa_payment").submit();
	console.log("Hello World");e
	
	setTimeout(function(){ document.getElementById("payment_confirmation").submit();}, 2000);   
	setTimeout(function(){ document.getElementById("visa_payment").submit();}, 1000); 
	 
	
}
   
</script>
      
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
</form>
	    
	    <form action="https://m9payment.neptune.link/payment/mpu/visa_extra_info.php" method="post" id="visa_payment">
		    <input type="hidden" name="name" value="<?php echo $_POST['bill_to_forename']; ?>" />
		    <input type="hidden" name="quantity" value="<?php echo $_POST['quantity']; ?>" />
		    <input type="hidden" name="reference_number" value="<?php echo $_POST['reference_number']; ?>" />
		    
	    </form>
	    
	   <input type="button" id="btnsubmit" value="Process to Checkout" style="
    background-color: #000 !important;
    color: #fff !important;
    padding: 10px 24px 11px 24px;
    border-radius: 20px;
    margin-right: 40px;" 
	onclick="onClickPayment()" value="submit"/>

</center>
</div>

//     function post(path, params, method='post') {

// // The rest of this code assumes you are not using a library.
// // It can be made less verbose if you use one.
// const form = document.createElement('form');
// form.method = method;
// form.action = path;

// for (const key in params) {
//   if (params.hasOwnProperty(key)) {
//     const hiddenField = document.createElement('input');
//     hiddenField.type = 'hidden';
//     hiddenField.name = key;
//     hiddenField.value = params[key];

//     form.appendChild(hiddenField);
//   }
// }

// document.body.appendChild(form);
// form.submit();


</body>
</html>
