<?php
include"conection.php";
$result=mysql_query("select *from fo
  
echo"<table border=1>";
echo"<tr>";
echo"<td>id</td><td>name</td><td>email</td><td>mobile_no</td><td></td></tr>";
echo"<td><?php echo.row['id'];?></td>";
echo "<td>.row['name].</td><td>.[email].</td><td>.row['mobile'].</td><td>delete</td></tr>";
echo"</table>";
?>
