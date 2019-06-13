<?php
require "connection.php";
$email = $_POST['emailid'];
$pass  =$_POST['password'];
$mysql_qry = "select * from register where email like '$email' and password like '$pass'";
$result = mysqli_query($conn , $mysql_qry);
if(mysqli_num_rows($result) > 0)
{
$mysql_qry = "select name,mobileno from register where email like '$email';";
$result = mysqli_query($conn , $mysql_qry);
$row = $result->fetch_assoc();
session_start();
$_SESSION["uname"] =$row["name"];
$_SESSION["mobi"] =$row["mobileno"];
header("location:lghome.html");
}
else 
{
echo "login not success";
}
?>