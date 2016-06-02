<?php

$con  = mysqli_connect('127.0.0.1','root','','wtdb');


if(!$con){
	die("Connection Failed!!");
}


$login = $_POST['lid'];
$pass = $_POST['pwd'];

$pass1 = md5($pass);



$sql = "select * from xyz where name='$login' and pass='$pass1'";

$run=mysqli_query($con,$sql);
$n=mysqli_num_rows($run);
if($n==1)
{
	while($row=mysqli_fetch_assoc($run))
	{
		echo "Welcome ".$row['name']."<br>";

	}
	echo "Right Login Information";

}
else{
	echo "Fail";
}




?>