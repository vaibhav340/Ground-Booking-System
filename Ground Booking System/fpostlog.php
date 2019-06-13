<?php
session_start();
?>
<html>
<head>
    
    <link rel="stylesheet" href="polog.css">
	</head>
<body>
    <div class = "loginBox">
<form action="fturnreg.php" method="post" name="GroundBooking" onsubmit="return(validate());">

<table cellpadding="2" width="20%" align="center" cellspacing="2">

<tr>
<td colspan=2>
<center><font size=18 color=cyan ><b>Ground booking Form</b></font></center>
</td>
</tr>

<tr>
<td>Name</td>
<td><input type="text" value=<?php
echo $_SESSION['uname'];
?> name="nm" id="textname" size="30"></td>
</tr>




<tr>
<td>Sport</td>
<td name="sprt" id="sprt" size="30" value="cricket" >
FootBall</td>
</tr>

<td>Date</td>
<td><input type="date" name="dt" min="2017-06-11" max="2020-06-11"></td>
<td>Days</td>
<td><input type="number" name="tm"></td>


<tr>
<td>MobileNo</td>
<td><input type="tel" value=<?php
echo $_SESSION['mobi'];
?> name="mno" id="mno" size="30"></td>
</tr>
<tr>
<td>If you want to Organize tournament </td>
<td><input type="text" name="tourname" id="textname" placeholder="Tournament name" size="30"></td>
</tr>
    <tr> 
<td>Amount</td>
<td name="amount" id="amount" size="30" value="100" >150</td>
        <td><a href="pay.html">Paytm</a></td>

</tr>
    
    
    
    
<tr>
<td><input type="reset"></td>
<td colspan="2"><input type="submit" value="Submit Form" /></td>
</tr>
</table>
</form>
</div>
</body>
    
</html>
        
            
 