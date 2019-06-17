<?php 
include_once 'connection.php';

$cust_id = $_POST['cust_id'];
$cust_name = $_POST['cust_name'];
$address = $_POST['address'];
$contact_num = $_POST['contact_num'];

$sql = "UPDATE `customer_details` SET cust_id='$cust_id', cust_name='$cust_name', address='$address', contact_num='$contact_num' WHERE cust_id='$cust_id'";

if ($connection->query($sql)===TRUE){
    echo "Success!";
}
else{
    echo "Un successfull";
}

$connection->close();
?>
