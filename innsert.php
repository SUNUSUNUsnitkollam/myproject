<?php
include('dbconn.php');
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$uname=$_POST["uname"];
$pass=$_POST["pass"];
$phno=$_POST["phno"];
$email=$_POST["email"];

$mysql->query("insert into examm(fname,lname,uname,pass,phno,email,status)values('$fname','$lname','$uname','$pass','$phno','$email','0')");
header('location:studd.php');

?>