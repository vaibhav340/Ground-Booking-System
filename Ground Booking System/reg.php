<html>
<head><title>REGISTER  </title>  

<meta charset="utf-8">
<link rel="stylesheet" href="rg.css">

</head>

<body>
<div class = "loginBox">
     <img src=" logo.jpg" class="user">
    <h2>Register Here</h2>
    <form action="register.php" method="post">
    <p>Enter Name </p>
         <input type="text" name="name" placeholder="enter name" required pattern="(?=.*([\w]).*)[\w]*>
         <p>Enter contact Number </p>
         <input type="tel" name="mobino" placeholder="enter numeric value">
        
        
        <p>E-mail</p>
                 <input type="email" name="email" placeholder="enter e-mail" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">
    <p>Password</p>
                 <input type="password" name="password" placeholder="*******" maxlength="10" required pattern="[0-9]{10}">
        
        <p>Enter Password Again</p>
                 <input type="password" name="cpassword" placeholder="*******">
         <input type="submit" value="Submit">
        
    </form>   
    
    </div>


</body>

</html>