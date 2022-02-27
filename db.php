<?php
$servername="localhost";
$username="root";
$password="";
$mydb="Employee";
$conn=new mysqli("$servername","$username","$password","$mydb");
$sql = "SELECT id from Employees";
if($conn->query($sql)===TRUE)
{
echo("Table  created");
}
$conn->close();
?>