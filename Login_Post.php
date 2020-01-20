<?php
include('Connection.php');
  
$user=$_POST['user'];
$pass=$_POST['pass'];

$query="select * from login where user='$user' and password='$pass'";
$result=(mysqli_query($conn,$query));
if (mysqli_num_rows($result)>0)
{
  
   echo "<script>
   window.location.href=('dashboard.php');
   </script>";

  $query1="select registration.r_id,r_name,u_image,user,password from registration  inner join login  where registration.r_id=login.r_id and user='$user' and password='$pass' ";
  $result1=mysqli_query($conn,$query1);
  while($row=mysqli_fetch_array($result1))
        {
          $id=$row['r_id'];
          $name=$row['r_name'];
          $img=$row['u_image'];
          //$user=$row['user'];
          //$pass=$row['password'];

          session_start();  
          echo $_SESSION['r_id']=$id;
          echo $_SESSION['r_name']=$name;
          echo $_SESSION['u_image']=$img;
          $_SESSION['user']=$user;
          $_SESSION['password']=$pass;

         }

}

else{
  echo "<script>
  alert('Invalid username or password');
  window.location.href=('index.php');
  </script>";
}

?>