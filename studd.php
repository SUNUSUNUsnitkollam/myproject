<!DOCTYPE html>
<html>
<head>
    
  	<title>
  	 	This is a user registration page
  	 </title>
  	 <style>
  	 	body
  	 	{
  	 	 color:red;
  	 	 padding:20px;


  	 	}
      table,td{
        color:red;
        border:1px solid red;
        padding:20px;
        width:200px;
    
      }
	  </style>
  </head>
  <body>
    <table>
      <thead>
        REGISTRATION PAGE
      </thead>
      <tbody>

		
	


<form action="innsert.php" method="POST">


<tr>
	<td>First Name:</td>
	<td><input type="text" name="fname"placeholder="Name" pattern="{a-zA-Z}"title="Enter only characters" required="required" maxlength=25></td>
</tr>
<tr>
	<td>Last Name:</td>
	<td><input type="text" name="lname"placeholder="Lastname" required="required" maxlength=25></td>
</tr>
<tr>
	<td>Username</td>
	<td><input type="text" name="uname" placeholder="Enter your username" required="required" maxlength=10></td>
	</tr>
<tr>
	<td>Password:</td>
	<td><input type="password" name="pass" placeholder="password" required="required" maxlength=25 pattern="{a-zA-Z} "title="Enter only characters and special symbols" ></td>
</tr>
<tr>
	<td>Mobile:</td>
	<td><input type="text" name="phno"placeholder="Enter your ph no" required="required" maxlength=25></td>
</tr>
<tr>
	<td>Email:</td>
	<td><input type="email" name="email"placeholder="E-mail id" required="required" maxlength=25></td>
</tr>
<tr>
	<td colspan="2"><input type="submit"  name="submit" value="Submit" style="align:center">
</td>	
</tr>
</table>
</form>
