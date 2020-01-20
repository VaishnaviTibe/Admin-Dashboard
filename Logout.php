<?php 
include("Connection.php");
session_start();
$_SESSION['user'];
session_destroy();
echo "<script>
window.location.href='index.php';
</script>";
?>