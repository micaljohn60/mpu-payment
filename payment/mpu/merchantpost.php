<?php
 include 'security.php';
   echo "Hello Worls --> fields -->";
   $invalid_field = $_REQUEST["invalid_fields"];
$decision = $_REQUEST["decision"];

echo $invalid_fields;
echo $decision;
 include_once 'db.php';
       
        $insert = $db->query("INSERT test_table () VALUES ('".$invalid_fields."')");

      $insert2 = $db->query("UPDATE order_shippings SET status='$status' WHERE shipping_phone='$userDefined2' ");
 ?>


