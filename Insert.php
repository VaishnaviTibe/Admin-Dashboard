<?php
//echo "Welcome in PHP";
include('Connection.php');
 $name=$_POST['n'];
 $email=$_POST['e'];
 $mob=$_POST['m'];
 $dob=$_POST['d'];
 $gender=$_POST['option'];
 $course=$_POST['c'];
 $address=$_POST['add'];
 echo $user=$_POST['user'];
 echo $pass=$_POST['pass'];

$q="insert into registration(r_name,r_email,r_mobile,r_dob,r_gender,r_course,r_address) values('$name','$email','$mob','$dob','$gender','$course','$address')";
if(mysqli_query($conn,$q))
	{
		$fk=mysqli_insert_id($conn);
		$path = "uploads/";
  //$name="jdkajkaj";
  //echo $name;
	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];

			if(strlen($name))
			{
				list($txt, $ext) = explode(".", $name);
				if(in_array($ext,$valid_formats))
					{
						if($size<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $ext), 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
							/*	echo "welcome".$actual_image_name;
								$query="UPDATE login_details SET image='$actual_image_name' WHERE l_id='12'";
								mysqli_query($conn,$query);
								//mysql_query($query);
								$img=$actual_image_name;
								$query="insert into login_details(image)value('$img') where L id='10'";
								***/
								
								$img=$actual_image_name;
                                   echo $fk=mysqli_insert_id($conn);//want to add last id in login table
			                       $query2="insert into login(r_id,user,password,u_image)values('$fk','$user','$pass','$img')";
								   if(mysqli_query($conn,$query2))
										{
												//echo "Record inserted successfully.";
												
												echo "<script>
	                                              alert ('Registration successfully');
	                                              window.location.href=('index.php');
	                                              </script>";
										}
												else{
													echo "Record insertion failed";
													}

									//echo "<img src='uploads/".$actual_image_name."' class='preview'>";
								}
							else
								echo "image uplod failed";
						}
						else
						echo "Image file size max 1 MB";
						}
						else
						echo "Invalid file format..";
			}

			else
				echo "Please select image..!";

			exit;
		}
		
			// echo $fk=mysqli_insert_id($conn);//want to add last id in login table
			/*$query3="insert into login(r_id,user,password)values('$fk','$user','$pass')";
			 if(mysqli_query($conn,$query3))
			 {
				 echo "Record inserted successfully.";
				 header('location:Login.php');
			 }
			 else{
				 echo "failed";
			 }*/
	}
		 else{
			 echo "failed first query";
		 }

?>