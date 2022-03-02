<?php
$servername="localhost";
$username="root";
$pwd="";
$db="Foods";
$conn=new mysqli($servername,$username,$pwd,$db);
$sql="SELECT*FROM Food";
$result=$conn->query($sql);
if($result->num_rows>0)
{
$i=0;
while($val=$result->fetch_assoc())
{
$food[$i]['id']=$val['id'];
$food[$i]['foodname']=$val['foodname'];
$food[$i]['price']=$val['price'];
$i=$i+1;
}
$response['status']=true;
$response['message']="success";
$response['data']=$food;
}
else{
$response['status']=fail;
$response['message']="not success";
$response['data']=$food;
}
header("content-type:application/json;charset=UTF-8");
echo json_encode($response);

?>