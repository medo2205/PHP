<form action="form.php" method="GET">
Username: <input type="text" name="username"> <br>
Password: <input type="Password" name="password"> <br>
<input type="submit">
</form>


<?php

echo $_GET["username"];
echo "<br>";
echo $_GET["password"];

?>