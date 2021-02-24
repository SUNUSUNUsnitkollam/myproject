<?php
include('dbconn.php');

	$id=$_GET['id'];
	$mysql->query("update examm set status='1' where  id='$id'");
?>