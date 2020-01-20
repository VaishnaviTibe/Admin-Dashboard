<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		
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
	<div class="col-sm-12 col-md-6 col-lg-4" style="text-align:center;background-color: #111;background-image:url('images/8.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;height:600px;">
	<?php include('MenuButtons.php');?><br>
	</div><!--/1st col Menu Buttons-->

	<div class="col-sm-12 col-md-6 col-lg-8">
		<form action="InsertCourse.php" method="post" style="margin-top:30px;">
			<div class="form-group" style="margin-left: 50px">
			<b>Course Name</b> <input type="text" class="form-control" name="course" style="font-size:20px;border-bottom:1px solid lightgray;border-radius:20px;width: 80%" required=""><br /> 
			<label><b>Course Duration</b></label> <input type="text" class="form-control" name="duration" style="font-size:20px;border-bottom:1px solid lightgray;border-radius:20px;width: 80%" required=""><br />
			<b>Course Batch</b> <input type="text" class="form-control" name="batch" style="font-size:20px;border-bottom:1px solid lightgray;border-radius:20px;width: 80%" required=""><br />
			<b>Course Fees</b> <input type="text" class="form-control" name="fees" style="font-size:20px;border-bottom:1px solid lightgray;border-radius:20px;width: 80%" required=""><br /><br />
			<input type="submit" name="submit" class="btn btn-dark" style="font-size: 20px;color:#fff;background-image:url('images/12.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;" value="Submit">
			</div>
		</form>
	</div><!--/2nd col-->
</div><!--/2nd row-->
</div><!--/container-->
</body></html>