<!DOCTYPE html>
<html>
<head>
<title>Update Course</title>
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
	<div class="col-sm-12 col-md-12 col-lg-12" style="text-align:left;"> 
		<?php
				include("Connection.php");
				$id=$_GET['id'];
				$query="select * from course where c_id='$id'";
				$result=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($result)){
					$id=$row['c_id'];
					$name=$row['c_name'];
					$duration=$row['c_duration'];
					$batch=$row['c_batch'];
					$fees=$row['c_fees'];
				}
		?> 	<br>
		<a class="btn btn-warning" href="dashboard.php" style="background-image:url('images/11.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;color: #fff;">Home</a>
<br>
			<form class="text-center" action="UpdateCourse_post.php" method="post" style="background-image:url('images/5.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;padding: 10px;margin-top: 10px"><br>
				<div class="form-group">
				<input type="hidden" class="form-control" name="id" value="<?php echo $id?>" >
				<label style="color:#111;font-size: 20px;font-weight: bold;font-family: sans-serif;">Name </label> 
				<input type="text" class="form-control" name="n" value="<?php echo $name;?>" style="width: 50%;margin-left: 25%;text-align: center;"> 
				<br>
				<label style="color:#111;font-size: 20px;font-weight: bold;font-family: sans-serif;">Duration </label> 
				<input type="text" class="form-control" name="m" value="<?php echo $duration ?>" style="width: 50%;margin-left: 25%;text-align: center;"> 
				<br>
				<label style="color:#111;font-size: 20px;font-weight: bold;font-family: sans-serif;">Batch </label> 
				<input type="text" class="form-control" name="r" value="<?php echo $batch ?>" style="width: 50%;margin-left: 25%;text-align: center;"><br>
				<label style="color:#111;font-size: 20px;font-weight: bold;font-family: sans-serif;">Fees </label> 
				<input type="text" class="form-control" name="f" value="<?php echo $fees ?>" style="width: 50%;margin-left: 25%;text-align: center;"><br>
				<br><input type="submit" name="Sumbit" value="Update" class="btn" style="background-image:url('images/12.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;color: #fff;">
			</div></form>
				
	</div><!--/2nd col-->
</div><!--/2nd row-->
</div><!--/2nd container-->
</div><!--/container-->
</body></html>