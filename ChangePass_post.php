<?php
include("Connection.php"); 
$user=$_POST['username'];
$pass=$_POST['password'];

session_start();   
$id=$_SESSION['r_id'];
$user1=$_SESSION['user'];
$pass1=$_SESSION['password'];

	if ($user==$user1 && $pass==$pass1)
	{
		echo "<script>
    	alert ('Logged in successfully');
		window.location.href=('UpdatePass.php');
	 	</script>";
	}	
	else{
		echo "<script>
		alert('Invalid username or password');
		window.location.href=('ChangePass.php');
		</script>";
	}
?>