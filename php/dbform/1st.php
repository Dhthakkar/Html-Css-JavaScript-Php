<?php


$con = mysqli_connect('127.0.0.1','root','','wtdb');

if(!$con){
	die("Connection Fails.");
}

$name = $_POST['uname'];
$password1 = $_POST['pass1'];
$password2 = $_POST['pass2'];

$mobile = $_POST['mob'];
$gender = $_POST['gen'];





if($password1==$password2){

$pass1 = md5($password1);

}else{
	echo "Wrong Confirm Password";
}


$sql =  "INSERT INTO xyz values('$name','$pass1','$mobile','$gender')";


if(mysqli_query($con,$sql)){

	echo "Successfully Done";
}else{
	echo "Fails";
}





?>