<!DOCTYPE html>
<html>
<head>
<title>Update Student</title>
<style>
#f{
	width: 50%;
	border-radius:10px;
	margin-bottom: 5px;
	margin-left: 25%;
}
</style>
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
	<div class="col-sm-12 col-md-6 col-lg-4" style="text-align:center;text-align:center;background-color: #111;background-image:url('images/8.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
		<?php include('MenuButtons.php');?>
		<br>
	</div><!--/1st col Menu Buttons-->
	<div class="col-sm-12 col-md-6 col-lg-8" style="height:600px;">
		<?php
				include("Connection.php");
				$id=$_GET['id'];
				$query="select * from student where s_id='$id'";
				$result=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($result)){
					$id=$row['s_id'];
					$name=$row['s_name'];
					$email=$row['s_email'];
					$mob=$row['s_mobile'];
					$dob=$row['s_dob'];
					$gender=$row['s_gender'];
					$course=$row['s_course'];
					$add=$row['s_address'];
				}
		?> 	
				<form action="UpdateStudent_post.php" method="get" style="margin-left: 60px" class="text-center"><br>
				<div class="form-group">
				<input type="hidden" class="form-control" name="id" value="<?php echo $id?>" >
				Name <input type="text" class="form-control" name="n" value="<?php echo $name;?>" id="f">
				Email <input type="text" class="form-control" name="e" value="<?php echo $email ?>" id="f">
				Mobile <input type="text" class="form-control" name="m" value="<?php echo $mob ?>" id="f">
				DOB <input type="text" class="form-control" name="d" value="<?php echo $dob ?>" id="f"> 
				Gender <input type="text" class="form-control" name="g" value="<?php echo $gender ?>" id="f">
				Course <input type="text" class="form-control" name="c" value="<?php echo $course ?>" id="f">
				Address <input type="text" class="form-control" name="a" value="<?php echo $add ?>" id="f">
				<br><input type="submit" name="Sumbit" value="Update" class="btn" style="background-image:url('images/12.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;color: #fff;">
			</div></form>
	</div><!--/2nd col-->
</div><!--/2nd row-->
</div><!--/container-->
</body></html>