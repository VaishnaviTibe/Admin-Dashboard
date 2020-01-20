<?php
include("Connection.php");
echo $id=$_GET['id'];
$query="delete from student where s_id='$id'";

if(mysqli_query($conn,$query)){
	echo "<script>
	alert('Record Deleted Successfully');
window.location.href='ShowStud.php';
</script>";
}
else{
	echo "Error....";
}

?>