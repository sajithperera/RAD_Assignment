<?php
require_once('connection.php');
$cust_id = $_GET['cust_id'];
$DelSql = "DELETE FROM `customer_details` WHERE cust_id=$cust_id";
$res = mysqli_query($connection, $DelSql);
if($res){
	header('location: view.php');
}else{
	echo "Failed to delete";
}
?>