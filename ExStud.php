<!DOCTYPE html>
<html>
<head>
<title>Exsiting Student</title>
<link href="AddCourse.css" rel="stylesheet" type="text/css">
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
	<div class="col-sm-12 col-md-6 col-lg-4" style="text-align:center;background-color: #16171a;background-image:url('images/8.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
	<?php include('MenuButtons.php');?>
	<br>
	</div><!--/1st col Menu Buttons-->
	<div class="col-sm-12 col-md-6 col-lg-8"  style="text-align: center; background-image:url(images/bg-1.jpeg); background-size:cover;"><br>
		<?php
			include("Connection.php");
			echo"<table bgcolor='white' width=100% border=1 style='overflow:auto'>
			<tr><th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>MOBILE</th>
			<th>DOB</th>
			<th>GENDER</th>
			<th>COURSE</th>
			<th>ADDRESS</th>
			<th>Action</th>
			<th>Action</th></tr>";
			$q1="select * from student";
			$r=mysqli_query($conn,$q1);
			while($row=mysqli_fetch_array($r)){
				echo "<tr><td style='color:red'>".$row['s_id']."</td>";
				echo "<td>".$row['s_name']."</td>";
				echo "<td>".$row['s_email']."</td>";
				echo "<td>".$row['s_mobile']."</td>";
				echo "<td>".$row['s_dob']."</td>";
				echo "<td>".$row['s_gender']."</td>";
				echo "<td>".$row['s_course']."</td>";
				echo "<td>".$row['s_address']."</td>";
				echo '<td>'."<a href='UpdateExStudent.php?id=$row[s_id]' class='btn btn-success' style='background-color:#d2edfa;color:#111'>Update</a>".'</td>';
				echo '<td>'."<a href='DeleteExStudent.php?id=$row[s_id]' class='btn btn-success' style='background-color:#d2edfa;color:#111'>Delete</a>".'</td></tr>';
			}
		?>
	</div><!--/2nd col-->
</div><!--/2nd row-->
</div><!--/container-->
</body></html>