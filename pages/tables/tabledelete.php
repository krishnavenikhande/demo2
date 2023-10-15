<?php
$con=mysqli_connect("localhost","root","","php program");
$id=$_GET['a'];
$sql="delete from newform where id=$id";

if(mysqli_query($con,$sql))
{
	echo "Record Delete";
}
else
{
	echo "error".mysqli_error($con);
}

?>