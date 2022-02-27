<?php
$cookie_name="user";
$cookie_value="john doe";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<html><body>
<?php
if (count($_COOKIE)>0)
{
	echo "cookies are enabled";
}
else{
	echo "cookies are not enabled";
}
?>
</body></html>