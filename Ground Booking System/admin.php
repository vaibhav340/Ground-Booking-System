<?php
require "connection.php";
$name = $_POST['uname'];
$pass  =$_POST['upass'];
if($name=="admin" && $pass=="admin123")
{
header("location:adhome.php");
}
else 
{
echo "login not success";
}
?>