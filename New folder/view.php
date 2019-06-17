<?php 
require_once('connection.php');
$ReadSql = "SELECT * FROM `customer_details`";
$res = mysqli_query($connection, $ReadSql); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application - READ Operation</title>
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
	<h2>View details</h2>
		<table class="table "> 
		<thead> 
			<tr> 
				<th>Customer ID</th> 
				<th>Customer name</th> 
				<th>Address </th> 
				<th>telephone num</th> 
			</tr> 
		</thead> 
<?php 
		while($r = mysqli_fetch_assoc($res)){
		?>
			<tr> 
				<th scope="row"><?php echo $r['cust_id']; ?></th> 
				<td><?php echo $r['cust_name']; ?></td> 
				<td><?php echo $r['address']; ?></td> 
				<td><?php echo $r['contact_num']; ?></td> 
				<td>

           
					<a href="update.php?cust_id=<?php echo $r['cust_id'];?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
					<a href="delete.php?cust_id=<?php echo $r['cust_id'];?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
				</td>
			</tr> 
		<?php } ?>
		</table>
	</div>
</div>
</body>
</html>