<?php
$dbconnect=mysqli_connect("localhost","root","","create");
if(mysqli_connect_errno($dbconnect))
{
	echo "Failed  to connect";
}
else
{
	echo "Login Successfully";
}
?>