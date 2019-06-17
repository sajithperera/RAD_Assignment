<?php
require_once('connection.php');
$id = $_GET['cust_id'];
//echo $cust_id;
$SelSql = "SELECT * FROM `customer_details` WHERE cust_id=$id";
//echo $SelSql;
$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);
//if(isset($_GET['cust_id'])){
	$id = $r['cust_id'];
	echo $id;
	echo "<br>"; 
	$cust_name = $r['cust_name'];
	echo $cust_name;
	echo "<br>"; 
	$address = $r['address'];
	echo $address;
	echo "<br>"; 
	$telephone = $r ['contact_num'];
	echo $telephone;
	echo "<br>"; 
//}

 
	$UpdateSql = "UPDATE `customer_details` SET cust_id='$id', cust_name='$cust_name', address='$address', contact_num='$telephone' WHERE cust_id=$id";
	$res = mysqli_query($connection, $UpdateSql);
	// if($res){
	//   	header('location: view.php');
	// }else{
	// 	$fmsg = "Failed to update data.";
	// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome TO The Animal Clinic</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<form method="post" action = "update_data.php" class="form-horizontal col-md-6 col-md-offset-3">
		<h2>Update the Animal Clinic</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Customer ID</label>
			    <div class="col-sm-10">
			      <input type="text" name="cust_id" value='<?php $cust_id?>' class="form-control" id="input1" placeholder="Customer ID" />
			    </div>
			</div>
 
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Customer Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="cust_name" value='<?php $cust_name?>'  class="form-control" id="input1" placeholder="Customer Name" />
			    </div>
			</div>
 
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
                <input type="text" name="address" value='<?php $address?>' class="form-control" id="input1" placeholder="Address" />
			    </div>
			</div>
            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Telepone Number</label>
			    <div class="col-sm-10">
                <input type="text" name="contact_num" value='<?php $telephone?>' class="form-control" id="input1" placeholder="Contact Number" />
			    </div>
			</div>
 
			<div>
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Update" />
			</div>
			
		</form>
	</div>
</div>
</body>
</html>