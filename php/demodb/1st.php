<?php

$id=$_POST['id'];
$pass=$_POST['pass'];

$con = mysqli_connect('127.0.0.1','root','','test1');

if(!$con){

	die("Connection Error");
}

$sql = "INSERT INTO xyz (id,pass) VALUES ('$id','$pass')";

if(mysqli_query($con,$sql)){
	echo "Done Successfully";
}
else
{
	echo "Fail";
}
mysqli_close($con);
?>