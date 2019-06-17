<?php 
include_once 'connection.php';

$cust_id = $_POST['cust_id'];
$cust_name = $_POST['cust_name'];
$address = $_POST['address'];
$contact_num = $_POST['contact_num'];

$sql = "INSERT INTO customer_details(cust_id,cust_name, address, contact_num) VALUES ('$cust_id','$cust_name', '$address', '$contact_num')";

if ($connection->query($sql)===TRUE){
    echo "Success!";
}
else{
    echo "Un successfull";
}

$connection->close();
?>
