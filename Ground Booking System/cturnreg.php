<?php
require "connection.php";
$name =  $_POST['nm'];
$dt =  $_POST['dt'];
$tim = $_POST['tm'];
$mbno  = $_POST['mno'];
$tour =$_POST['tourname'];

$mysql_qry = "insert into ground(name,sport,date,days,mobileno,tourname,status) values('$name','Cricket','$dt','$tim','$mbno','$tour','unpaid')";

if($conn->query($mysql_qry) === TRUE)
{
    header("location:lghome.html");
}
else 
{
echo "please register again";
echo mysqli_error($conn);
}
?>