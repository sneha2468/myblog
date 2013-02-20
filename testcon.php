<?php
include"connection.php";

$name=$_POST['txtname'];
$email=$_POST['email'];
$mo=$_POST['mobile_no'];

echo $name;

$test=mysql_query("insert into form(name,email,mobile) values('$name','$email','$mo')");
if($test)
{
echo "1 row inserted";
}

?>