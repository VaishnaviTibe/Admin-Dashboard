<!DOCTYPE html>
<html><head><title>Registration Form</title>
	<script src="js/image_upload.js"> </script>
  	<script src="js/imageupload.js"> </script>
	<style>
  	.preview{
		width:50px;
		height:50px;
		border:solid 1px #dedede;
		padding:10px;
	}

	#preview{
		color:#fff;
		font-size:12px;
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
<section  style="text-align:left; background-image:url(images/bg-2.jpg); background-size:cover;">
<div class="container"><br><h2 style="color:#f55307">Registration Form</h2><br>
<form action="Insert.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<p style="color:#fff;font-size:20px;font-weight:bold">Name </p><input type="text" name="n" class="form-control" style="width: 50%" required=""><br>
		<p style="color:#fff;font-size:20px;font-weight:bold">Email</p><input type="email" name="e" class="form-control" style="width: 50%" placeholder="user@example.com" required=""><br>
		<p style="color:#fff;font-size:20px;font-weight:bold">Mobile </p><input type="text" name="m" class="form-control" style="width: 50%" required=""><br>
		<p style="color:#fff;font-size:20px;font-weight:bold">DOB</p><input type="date" name="d" class="form-control" style="width: 50%" required=""><br>
		<p style="color:#fff;font-size:20px;font-weight:bold">Gender</p>
		<p style="color:#fff;font-size:15px;font-weight:bold">Male
		<input type="radio" value="Male" name="option"> Female
		<input type="radio" value="Female" name="option"></p><br>
		<p style="color:#fff;font-size:20px;font-weight:bold">Course</p><select class="form-control" name="c" style="width: 50%" required="">
			<option>--Select--</option>
			<option>JAVA</option>
			<option>PHP</option>
			<option>UI</option>
			<option>UX</option>
			<option>FULL STACK</option>
			<option>MEAN STACK</option>
			<option>WORDPRESS</option>
		</select><br>
		<p style="color:#fff;font-size:20px;font-weight:bold">Address</p><textarea class="form-control" name="add" style="width: 50%" required=""></textarea><br>
		<p style="color:#fff;font-size:20px;font-weight:bold">Username</p> <input type="text" name="user" class="form-control" style="width: 50%" required=""><br>
		<p style="color:#fff;font-size:20px;font-weight:bold">Password</p> <input type="password" name="pass" class="form-control" style="width: 50%" required=""><br>
		<input type="file" class="form-control-file" name="photoimg" id="photoimg" multiple style="color:#fff" required="">
		<br><input type="submit" name="sumbit" value="Register" class="btn btn-primary" style="background-image:url('images/12.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;color: #fff;">
		</div>
</form><br></div></section>