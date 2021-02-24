<?php
include('dbconn.php');

	$id=$_GET['id'];

	$mysql->query("update examm set status='0' where id='$id'");

header('location:view.php');


?>