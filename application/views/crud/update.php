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
<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="<?php echo site_url('crud/update_post/'.$crud_data->NIC)?>">
<h2>UPDATE Operation in CRUD Application</h2>
<?php //echo print_r($crud_data); ?>
	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">NIC</label>
	    <div class="col-md-2">
	      <input type="text" name="NIC" value="<?php echo $crud_data->NIC; ?>" class="form-control" id="input1" />
	    </div>
	</div>

	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">Name</label>
	    <div class="col-md-2">
	      <input type="text" name="Name" value="<?php echo $crud_data->Name; ?>" class="form-control" id="input1" placeholder="Name" />
	    </div>
	</div>

	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">Address</label>
	    <div class="col-md-2">
	      <input type="text" name="Address" value="<?php echo $crud_data->Address; ?>" class="form-control" id="input1" placeholder="Address" />
	    </div>
	</div>

	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">Contact_num</label>
	    <div class="col-md-2">
	      <input type="text" name="Contact_num" value="<?php echo $crud_data->Contact_num; ?>" class="form-control" id="input1" placeholder="Contact_num" />
	    </div>
	</div>

	
	<input type="hidden" value="<?php echo $crud_data->NIC; ?>"  name="NIC" />
	<input type="submit" class="btn btn-primary col-md-2 col-md-offset-4" value="submit" />
</form>
</body>
</html>