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
<nav class="navbar navbar-expand-md">
</nav>
<div class="container">
	<div class="row">
	<h2>Read Operation in CRUD applicaiton</h2>
		<table class="table "> 
		<thead> 
			<tr> 
                <th>#</th>
				<th>NIC</th> 
				<th>Name</th> 
				<th>Address</th> 
				<th>Contact Number</th> 
			</tr> 
		</thead> 
		<tbody> 
			<!-- <tr> 
				<th scope="row">1</th> 
				<td>Vivek Vengala</td> 
				<td>vivek@pixelw3.com</td> 
				<td>Male</td> 
				<td>28</td> 
				<td>
					<a href="update.php"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
					<a href="delete.php"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </td> -->
                <tbody> 
	        <?php 
                foreach($res_id->result() as $row){
            ?>
	        <tr> 
		        <th scope="row"><?php echo $row->NIC; ?></th> 
                <td><?php echo $row->NIC; ?></td> 
                <td><?php echo $row->Name; ?></td> 
                <td><?php echo $row->Address; ?></td> 
                <td><?php echo $row->Contact_num; ?></td> 
                <td>
                    <a href="update/<?php echo $row->NIC; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    <a href="delete/<?php echo $row->NIC; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $row->NIC; ?>">Delete</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal<?php echo $row->NIC; ?>" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete File</h4>
                            </div>
                            <div class="modal-body">
                            <p>Are you sure?</p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <a href="delete/<?php echo $row->NIC; ?>"><button type="button" class="btn btn-danger"> Yes..! Delete</button></a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </td>
            </tr> 
        <?php } ?>
        </tbody>
                    </tr> 
		</tbody> 
		</table>
	</div>
</div>
</body>
</html>