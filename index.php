<!DOCTYPE html>
<html>
<head><title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Admin Dashboard">
	<!--Font Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url('images/1.jpg');background-size: cover;background-position: center;">
<div class="container-fluid">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-4"></div><!--Col 1-->
<div class="col-sm-12 col-md-4 col-lg-4">
	
	<form action="Login_Post.php" method="post" class="bg-light" style="padding:20px;text-align:center;margin-top:100px;border-radius:10px;box-shadow: 3px 3px 3px #b2d9f7">
	<div class="form-group">
		<img src="images/user8.png" height="90px" style="border-radius:50%;margin-top: -80px">
		<h4><u>Admin Login</u></h4>
		<label style="margin-top:30px;font-weight:bold;font-size:18px;font-family:cursive;color:#1a0624;">Username</label>
		<input type="text" class="form-control" name="user" style="border-bottom: 1px solid red;font-family: monospace;" required><br>
		<label style="font-weight:bold;font-size:18px;font-family:cursive;color:#1a0624;">Password</label>
		<input type="password" class="form-control" name="pass" style="border-bottom: 1px solid green;" required>
		<br>

		<input type="submit" value="Login" style="font-weight:bold;font-size:18px;padding:7px 20px;color:#fff;border:1px solid #033a63;border-radius:3px;background-image:url('images/12.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;"><br><br>

		<a class="btn" href="Register.php" style="font-size:17px;padding:3px; border:1px solid #033a63; border-radius:5px;color:#111;text-decoration: none;margin-bottom:4px;">Create New Account</a>
	</div>
	</form>
</div><!--Col 2-->
<div class="col-sm-12 col-md-4 col-lg-4"></div><!--Col 3-->
</div><!--Row-->
</div><!--Container Fuild-->
</body>
</html>