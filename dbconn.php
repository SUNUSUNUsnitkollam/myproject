<?php
$mysql=new mysqli("localhost","root","","details");
if($mysql===false)
{
    die("Connection failed: <br>" . mysqli_connect_error());
}