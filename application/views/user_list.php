<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>List Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">List Page</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<!-- <br><br> -->
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Position</th>
						<th>Create Date</th>
						<th><a href="<?php echo base_url(); ?>index.php/users/addnew" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add </a></th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($users as $user){
						?>
						<tr>
							<td><?php echo $user->id; ?></td>
							<td><?php echo $user->first_name; ?></td>
							<td><?php echo $user->last_name; ?></td>
							<td><?php echo $user->position; ?></td>
							<td><?php echo $user->create_date; ?></td>
							<td><a href="<?php echo base_url(); ?>index.php/users/edit/<?php echo $user->id; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a><a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>