<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application in CodeIgniter - CREATE</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md">
</nav>
<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="<?php echo site_url('Crud/create_post'); ?>">
		<h2>Create Operation in CodeIgniter - CRUD Application</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">NIC</label>
			    <div class="col-sm-10">
			      <input type="text" name="NIC"  class="form-control" id="input1" placeholder="NIC" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="Name"  class="form-control" id="input1" placeholder="Name" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			      <input type="text" name="Address"  class="form-control" id="input1" placeholder="Address" />
			    </div>
            </div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Contact_num</label>
			    <div class="col-sm-10">
			      <input type="text" name="Contact_num"  class="form-control" id="input1" placeholder="Contact_num" />
			    </div>
            </div>
            
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
		</form>
	</div>
</div>
</body>
</html>