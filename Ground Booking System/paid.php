<?php
<?php
require "connection.php";
$name =  $_POST['nme'];
$dt =  $_POST['dt'];
$tim = $_POST['tm'];
$mbno  = $_POST['mno'];
$tour =$_POST['tourname'];

$mysql_qry = "update ground set status='paid' where name likes '$name';";

if($conn->query($mysql_qry) === TRUE)
{
    header("location:adhome.php");
}
else 
{
echo "please register again";
echo mysqli_error($conn);
}
?>
?>