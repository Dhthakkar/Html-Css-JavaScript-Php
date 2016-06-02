<?php

$arr = array('mango','tomato','pizza');

echo "Your Initial Array is:";
echo "<br>";
echo "<br>";
foreach ($arr as $drr) {
	echo $drr;
	echo "<br>";
}

$b = $_POST['app'];
$c = $_POST['front'];

array_unshift($arr, $c);
array_push($arr, $b);
echo "<br>";
echo "After Modifying the New Array is:";
echo "<br>";

foreach ($arr as $err) {

	echo $err;
	echo "<br>";
	
}




?>