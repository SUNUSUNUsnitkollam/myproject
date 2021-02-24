<!DOCTYPE html>
<html>
<head>
<style>
table,td
{
	border:2px solid red;
	border-collapse:collapse;
	padding:15px;
	margin:5px;
}

   
  	 	
  	 </style>
  </head>
  <body>
<table border="2">
  <tr>
	<td>SL NO</td>
    <td>FIRST NAME</td>
    <td>LAST NAME</td>
    <td>USERNAME</td>
	<td>PASSWORD</td>
    <td>PHNO</td>
	<td>EMAIL/td>
	<td>STATUS</td>
  </tr>


<?php
include('dbconn.php');
$query=$mysql->query("select * from examm");
while($row=$query->fetch_assoc())
{	
echo "<tr>
		
		<td>".$row["id"]."</td>
		<td>".$row["fname"]."</td>
		<td>".$row["lname"]."</td>
		<td>".$row["uname"]."</td>
		<td>".$row["pass"]."</td>
		<td>".$row["phno"]."</td>
		<td>".$row["email"]."</td>
		<td><a href='approve.php?id={$row['id']}'>Approve</a></td>
		<td><a href='reject.php?id={$row['id']}'>Reject</a></td>	
	</tr>";          
}
?>
</table>
</body>
</html>