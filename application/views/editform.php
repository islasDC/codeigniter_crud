<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Edit Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Edit Page</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Edit Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<?php extract($user); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/update/<?php echo $id; ?>">
				<div class="form-group">
					<label>Firstname:</label>
					<input type="text" class="form-control" value="<?php echo $first_name; ?>" name="fname">
				</div>
				<div class="form-group">
					<label>Lastname:</label>
					<input type="text" class="form-control" value="<?php echo $last_name; ?>" name="lname">
				</div>
				<div class="form-group">
					<label>Position:</label>
					<input type="text" class="form-control" value="<?php echo $position; ?>" name="position">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>