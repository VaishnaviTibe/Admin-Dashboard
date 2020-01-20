<!DOCTYPE html>
<html>
<head>
<title>New Student</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="row">
	<?php include('Header.php');?>
</div><!--/1st row Header-->
<div class="row">
	<div class="col-sm-12 col-md-6 col-lg-4" style="text-align:center;background-color: #16171a;background-image:url('images/8.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;height:600px;">
		<?php include('MenuButtons.php');?>
		<br>
	</div><!--/1st col Menu Buttons-->

	<div class="col-sm-12 col-md-6 col-lg-8" style="height:600px;">
		<div class="container" style="background-color:#fff"><br>
		<h2>Registration Form</h2><br>
<form action="NewStud1.php" method="post" enctype="multipart/form-data">
		<div class="A" style="float:left;width:50%;">
		Name <input type="text" name="n" class="form-control" style="width: 80%" required><br>
		Email<input type="email" name="e" class="form-control" style="width: 80%" placeholder="user@example.com" required><br>
		Mobile <input type="text" name="m" class="form-control" style="width: 80%" required><br>Gender: Male
		<input type="radio" value="Male" name="option"> Female
		<input type="radio" value="Female" name="option"><br>
		</div>
		<!--/class A-->
		<div class="B" style="float:left;width:50%;">
		DOB<input type="date" name="d" class="form-control" style="width: 80%" required><br>
		Course<select class="form-control" name="c" style="width: 80%" required>
			<option>JAVA</option>
			<option>PHP</option>
			<option>UI</option>
			<option>UX</option>
			<option>FULL STACK</option>
			<option>MEAN STACK</option>
			<option>WORDPRESS</option>
		</select><br>
		Address<textarea class="form-control" name="add" style="width: 80%" required></textarea><br><br><br></div><!--/class B-->
		<input type="submit" name="sumbit" value="Register" class="btn btn-warning" style="background-image:url('images/12.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;color:#fff;font-weight: bold;">
		
	</div><!--/2nd col-->
</div><!--/2nd row-->
</div><!--/container-->
</body></html>