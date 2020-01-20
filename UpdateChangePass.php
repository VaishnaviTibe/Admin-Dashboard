<?php
include("Connection.php");           
session_start();
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
$id=$_SESSION['r_id'];


if($pass==$pass1){
        $query="update login set password='$pass1' where r_id='$id' ";
	if(mysqli_query($conn,$query)){      
        echo "<script>
		alert('Password changed successfully');
		window.location.href=('index.php');
		</script>";
        }
 
}
    else {
      echo "<script>
		alert('Passwords donot match');
		window.location.href=('UpdatePass.php');
		</script>";
       }

?>