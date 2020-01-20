<?php 
include("Connection.php");
$duration=$_POST['duration'];
$batch=$_POST['batch'];
$course=$_POST['course'];
$fees=$_POST['fees'];
//$id=$_POST['id'];

$fk=mysqli_insert_id($conn);
$q="insert into course(c_name,c_duration,c_batch,c_fees) values('$course','$duration','$batch','$fees')";
if(mysqli_query($conn,$q)){
	
	echo"<script>
	alert('Course Inserted Successfully.');
	window.location.href=('ShowCourse.php');</script>";
}else{
	echo "Error Occured.";
}

?>
