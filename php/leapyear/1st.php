<?php

$yy = $_POST['year'];



if($yy%4==0 && $yy%100!=0)
{
	echo "This is Leap Year";

}
else{
	echo "This is not Leap year";
}



?>