<?php



$a = "Hii My Name is XYZ Abc";

$b = "madam";

$c = "pqrs";
$d = "lalbhai";
$e = "Countme";
$f = "Hello world";
$g = "Hello world!";
echo "<b>Reverse</b><br>";
echo "A: ".$a;
echo "<br>";
echo "Reverse of A is: ".strrev($a);
echo "<br>";
echo "<b>Comparision</b><br>";
echo "C: ".$c; echo "<br>";
echo "D: ".$d;
echo "<br>";
if(!strcmp($c, $d)){

	echo "C and D are Equal";
}
else
{
	echo "<br>";
	echo "Not Equal";
}
echo "<br>";
echo "<b>String Length</b><br>";
echo "E:".$e;
echo "<br>";
echo "Length of E is:".strlen($e);
echo "<br>";
echo "<b>Word Count</b><br>";
echo "F:".$f;
echo "<br>";
echo str_word_count($f)." words are there in F";
echo "<br>";

echo "<b>Word Position</b><br>";
echo "G:".$g;
echo "<br>";
echo "In G word \"WORLD\" is located at character position:".strpos($g, 'world');
?>