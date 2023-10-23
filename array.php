

<form action="array.php" method=GET>

<input type="text" name="name">
<input  type="submit" >


</form>

<?php

$name = $_GET["name"];
$Grades = [
   "Mohammed" => ["100", "A+"], 
   "Khalid" => ["70", "C"], 
   "Saher" => ["59", "F"], 
];
echo "Scoure : ". $Grades[$name][0];
echo "<br>";
echo " Grade : ". $Grades[$name][1];

?> 