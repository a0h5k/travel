<?php
$d = $_POST['destination'];
$e = $_POST['email'];
$m = $_POST['message'];
$con = mysqli_connect("localhost","root","","table");
$sql = "INSERT INTO travel(destination,email,message) VALUES ('$d','$e','$m') ";

$r=mysqli_query($con,$sql);
if($r)
{
	echo "MESSAGE IS SENT";

}
else
{
	echo "MESSAGE IS NOT SENT";

}


?>