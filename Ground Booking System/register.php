<?php
require "connection.php";
$name =  $_POST['name'];
$mobino  = $_POST['mobino'];
$email =  $_POST['email'];
$password  = $_POST['password'];
$mysql_qry = "insert into register(name,mobileno,email,password) values('$name','$mobino','$email','$password')";

if($conn->query($mysql_qry) === TRUE)
{
    header("location:login.html");
}
else 
{
echo "please register again";
}
?>