<?php
session_start();
?>
<html>
<body>
<?php
$_SESSION["favcolor"]="green";
$_SESSION["favanimal"]="dog";
echo "session variables are set";
?>
</body></html>
