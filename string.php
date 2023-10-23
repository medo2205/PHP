<?php
$string = "web engineering";
echo $string;
echo "<br>";

echo strlen($string);
echo "<br>";

echo $string[0];
echo "<br>";
echo "<br>";

$string[0] = "W";
$string[4] = "E";
echo $string;

echo "<br>";
echo str_replace("Web", "Software", $string);
echo "<br>";

echo substr($string, 0, 3)

?>