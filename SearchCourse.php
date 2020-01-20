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
</div><!--/1st row Header--></div>
<div class="container">
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12" style="">
		<br>
		<a class="btn btn-outline-secondary" href="dashboard.php" role="button" style="margin-top:50px;background-image:url('images/9.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;color:#fff;font-weight: bold;">Home</a>
		<form action="SearchC.php" method="post" style="margin-top:30px;text-align: center;">
			<div class="form-group">
				<div class="row">

				<div class="col-xs-12 col-sm-8 col-md-8">
				<input type="text" class="form-control form-control-line" name="SCourse" style="border:1px solid navy;">
			    </div>

			    <div class="col-xs-12 col-sm-4 col-md-4">
				<input type="submit" name="submit" value="Search" class="btn" style="background-image:url('images/12.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;color:#fff;font-weight: bold;float: left;">
			    </div><!--Col-->
				</div><!--row--->
			</div><!--fg-->
		</form>	

	</div><!--/2nd col-->
</div><!--/2nd row-->
</div><!--/2nd container-->
</body></html>
