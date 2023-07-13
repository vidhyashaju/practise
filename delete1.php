<?php
include 'connection1.php';
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM `user_details` WHERE id='$id'");
header("location:view.php");
echo "<script>alert('dalate successful')</script>";

?>