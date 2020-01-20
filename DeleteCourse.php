<?php
include("Connection.php");
echo $id=$_GET['id'];
$query="delete from course where c_id='$id'";

if(mysqli_query($conn,$query)){
	//echo "Deleted...";
	//header('location:Show.php'); // header() is used to redirect the page
	echo "<script>
alert('Record Deleted Successfully...');
window.location.href='ShowCourse.php';
</script>";
}
else{
	echo "Error....";
}

?>