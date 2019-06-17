

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
		<form method="post" action = "add_data.php" class="form-horizontal col-md-6 col-md-offset-3">
		<h2>Insert data in to the Animal Clinic</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Customer ID</label>
			    <div class="col-sm-10">
			      <input type="text" name="cust_id"  class="form-control" id="input1" placeholder="Customer ID" />
			    </div>
			</div>
 
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Customer Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="cust_name"  class="form-control" id="input1" placeholder="Customer Name" />
			    </div>
			</div>
 
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
                <input type="text" name="address"  class="form-control" id="input1" placeholder="Address" />
			    </div>
			</div>
            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Telepone Number</label>
			    <div class="col-sm-10">
                <input type="text" name="contact_num"  class="form-control" id="input1" placeholder="Contact Number" />
			    </div>
			</div>
 
			<div>
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
			</div>
			
		</form>
	</div>
</div>
</body>
</html>