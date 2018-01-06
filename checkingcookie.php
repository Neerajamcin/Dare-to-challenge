<!DOCTYPE html>
<html>
<head>
	<title>accessing cookies with php</title>
</head>
<body>
<?php
if(isset($_COOKIE["name"]))

echo "welcome".$_COOKIE["name"]."<br>";

else

echo "sorry...not recognised"."<br>";


?>
</body>
</html>