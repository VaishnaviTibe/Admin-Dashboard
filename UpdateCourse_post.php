<?php
 //echo "Updated Successfully.";
include ("Connection.php");

  $id=$_POST['id'];
  $name=$_POST['n'];
  $duration=$_POST['m'];
  $batch=$_POST['r'];
  $fees=$_POST['f'];
 
$q="update course SET c_name='$name',c_duration='$duration',c_batch='$batch',c_fees='$fees' where c_id='$id'";

if(mysqli_query($conn,$q)){
	//echo "Records Updated Successfully...";
	//header('location:Show.php');
	echo "<script>
	alert('Records Updated Successfully...');
window.location.href='ShowCourse.php';
</script>";
}
else{
	echo "Error...";
}
?>