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
<style>
#T {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#T td, #T th {
  border: 1px solid #ddd;
  font-size:18px;
  text-align:center;
  font-weight:bold;
}

#T tr:nth-child(even){background-color: #f2f2f2;}

#T tr:hover {background-color: #ddd;}

#T th {
  padding-top: 6px;
  padding-bottom: 6px;
  font-size:22px;
  text-align: center;
  color: navy;
}
</style>
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
		<!--a class="btn btn-outline-info" href="dashboard.php" role="button" style="margin-top:50px;background-image:url('images/11.jpg');background-repeat: no-repeat;background-size: cover;background-position: center; color: #fff;">Add New Course</a-->

		<a class="btn btn-outline-info" href="ShowCourse.php" role="button" style="margin-top:50px;background-image:url('images/bg1.jpg');background-repeat: no-repeat;background-size: cover;background-position: center; color: #fff;font-weight: bold;">All Courses</a>

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
		
<table border=1px id="T">
				<tr><th>ID</th>
					<th>NAME</th>
					<th>DURATION</th>
					<th>BATCH</th>
					<th>UPDATE</th>
					<th>DELETE</th>
				</tr>
				<?php
					include("Connection.php");
					$sc=$_POST['SCourse'];
					$query="select * from course where c_id='$sc' or c_name='$sc' or c_duration='$sc' or c_batch='$sc' ";
					$result=mysqli_query($conn,$query);
					while($row=mysqli_fetch_array($result)){
						echo "<tr><td>".$row['c_id']."</td>";
						echo "<td>".$row['c_name']."</td>";
						echo "<td>".$row['c_duration']."</td>";
						echo "<td>".$row['c_batch']."</td>";
						echo '<td>'."<a href='UpdateCourse.php?id=$row[c_id]'><i class='fas fa-edit' style='color:#069957'></i></a>".'</td>';
						echo '<td>'."<a href='DeleteCourse.php?id=$row[c_id]'><i class='fas fa-trash-alt' style='color:#d60404;'></i></a>".'</td>';
						echo"</tr>";
					}

				?>
		</table>
	</div><!--/2nd col-->
</div><!--/2nd row-->
</div><!--/2nd container-->
</body></html>

