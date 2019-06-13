<?php
require "connection.php";
$name =  $_POST['tname'];
$sp  = $_POST['slct1'];
$dt =  $_POST['slct2'];
$tim = $_POST['amount'];

$mysql_qry = "insert into tournament(name,sport,tournament,amount,status) values('$name','$sp','$dt','$tim','unpaid')";

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