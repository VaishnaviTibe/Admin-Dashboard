
		<?php
			 //echo "Updated Successfully.";
			include ("Connection.php");

			 $id=$_GET['id'];
			 $name=$_GET['n'];
			 $email=$_GET['e'];
			 $mob=$_GET['m'];
			 $dob=$_GET['d'];
			 $gender=$_GET['g'];
			 $c=$_GET['c'];
			 $add=$_GET['a'];

			$q="update student SET s_name='$name',s_email='$email',s_mobile='$mob',s_dob='$dob',s_gender='$gender',s_course='$c',s_address='$add' where s_id='$id'";

			if(mysqli_query($conn,$q)){
				echo "<script>
			alert('Records Updated Successfully...');
			window.location.href='ShowStud.php';
			</script>";
			}
			else{
				echo "Error...";
			}
		?>
	