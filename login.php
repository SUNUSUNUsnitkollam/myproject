<?php
include('dbconn.php');
$username=$_POST['username'];
$password=$_POST['pass'];
$sql="select * from examm where uname='$username' and pass='$password' and status='1'";
if($mysql->query($sql)===TRUE)
{
header('location:view.php');
}
else
{
echo ("not successfull".$mysql->error);
}
?>
	
