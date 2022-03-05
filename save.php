<?php
$conn=new mysqli("localhost","root","","Ajax");
$name=$_POST["name"];
$city=$_POST["city"];
$sql="insert into ajaxsupport values('{$name}','{$city}')";
if($conn->query($sql)==TRUE)
{
echo "values inserted";
}
	else
{
echo "not values inserted";
}

?>