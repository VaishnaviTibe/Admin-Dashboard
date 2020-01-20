<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>
<style type="text/css">
	.preview1{
 			height: 100px;
 			width: 100px;
			border:1px solid #111;
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
<div class="container-fluid" style="background-color:#f2f5f3">
<div class="row">
	<?php include('Header.php');?>
</div><!--/1st row Header--></div>
<div class="container">
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12" style="height:570px;">
		<br>
		<a class="btn btn-outline-secondary" href="dashboard.php" role="button" style="margin-top:50px;background-image:url('images/9.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;color:#fff;font-weight: bold;">Home</a>

		<br><br>
		
		<table border=1px style="width: 100%;overflow-y:visible;border-collapse: collapse; border:1px solid navy; scroll-behavior: smooth;background-color:#fff;overflow:auto; margin-top:60px; text-align:center">
				<tr style="background-color:#fff; font-size:20px;">
					<th>Name</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>DOB</th>
					<th>Gender</th>
					<th>Course</th>
					<th>Address</th>
					<th>Image</th>
				</tr>
		<?php
			include("Connection.php");
			$id=$_SESSION['r_id'];
			$img1=$_SESSION['u_image'];
			$query="select * from registration where r_id='$id'";
			$result=mysqli_query($conn,$query);
			while($row=mysqli_fetch_array($result)){
				echo "<tr><td>".$row['r_name']."</td>";
				echo "<td>".$row['r_mobile']."</td>";
				echo "<td>".$row['r_email']."</td>";
				echo "<td>".$row['r_dob']."</td>";
				echo "<td>".$row['r_gender']."</td>";
				echo "<td>".$row['r_course']."</td>";
				echo "<td>".$row['r_address']."</td>";
				echo "<td><img src='uploads/".$img1." 'class='preview1'></td></tr>";
			}
		?>	
		</table>
	</div><!--/col-->
</div><!--/2nd row--></div>
</div><!--/container-->
</body></html>