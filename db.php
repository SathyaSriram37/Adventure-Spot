<?php
$connect=mysqli_connect("Localhost","root","","adventure");
if($connect->connect_error)
echo "<script>alert('Failed to connect!')</script>";
?>