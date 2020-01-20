<!DOCTYPE html>
<html>
<head><style type="text/css">
	.preview{
 			height: 60px;
 			width: 60px;
			border-radius:100%;
			border:2px solid #fff;
			margin-left: 10px;
			margin-top: 5px;
			float: left;
 	}
 	.w{
 		color: #fff;
 		margin-left: 90px;
 		margin-top: 25px;
 	}
</style></head>
<div class="container-fluid">
	<div class="row" style="background-image:url('images/1.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;height: 70px;">
		<div class="col-sm-12 col-md-12 col-lg-12" style="width: 100%">	
				<div class="dropdown">
					<button class="btn btn-light" data-toggle="dropdown" style="float:right;margin-top:15px;font-size:17px;" ><i class="fa fa-bars"></i></button>
					<div class="dropdown-menu" >        
						<a class="dropdown-item" href="MyProfile.php" style="color: #1e211f; text-decoration-style: bold;"><i class="fas fa-user-circle" style="font-size:20px;color:#11031a;"></i> <b>My Profile</b></a><div class="dropdown-divider"></div>
						<a class="dropdown-item" href="ChangePass.php" style="color: #1e211f; text-decoration-style: bold;"><i class="fa fa-key" aria-hidden="true" style="font-size:20px;color:#11031a"></i> <b>Change Password</b></a><div class="dropdown-divider"></div>
						<a class="dropdown-item" href="Logout.php" style="color: #1e211f; text-decoration-style: bold;"><i class="fas fa-lock" style="font-size:20px;color:#11031a"></i> <b>Logout</b></a>
					</div>
				</div>
				<?php 
					include("Connection.php");
					session_start();
					$img1=$_SESSION['u_image'];
					echo "<img src='uploads/".$img1." 'class='preview'></h5>"; echo" "; 
					echo "<h5 class='w'>" .$_SESSION['r_name'];
				?>
	</div></div>
</div>

</html>