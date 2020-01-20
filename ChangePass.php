<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>
<style type="text/css">
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid" style="background-color:#f2f5f3">
<div class="row">
	<?php include('Header.php');?>
</div><!--/1st row Header--></div>
<div class="container">
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12" style="height:570px;">
		<br>
		<a class="btn btn-outline-secondary" href="dashboard.php" role="button" style="margin-top:20px;background-image:url('images/9.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;color:#fff;font-weight: bold;">Home</a>

		<br><br>
		<form  action="ChangePass_post.php" method="post" class="text-center" style="margin-top:10px;background-color:#f7f2f7;opacity:11;background-image:url('images/bg-6.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;padding: 50px;border-radius: 10px" >
			<div class="form-group">
				<label style="color:#fff;font-size: 20px;">Enter Username</label>
				<input type="text" name="username" placeholder="Username" class="form-control" style="width: 70%;margin-left: 15%" required><br>
				<label style="color:#fff;font-size: 20px;">Enter Password</label>
				<input type="password" name="password" placeholder="Password" class="form-control" style="width: 70%;margin-left: 15%" required>
				<br><br>
				<input type="submit" value="Submit" class="btn" style="background-image:url('images/12.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;color:#fff;font-weight: bold;">
			</div>
		</form>
		
	</div><!--/col-->
</div><!--/2nd row--></div>
</div><!--/container-->
</body></html>