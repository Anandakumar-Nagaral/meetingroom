<?php

 session_start();
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("meeting room") or die(mysql_error()); 

   
if($_POST)
{
    $oldpwd = $_POST["oldpwd"];
    $newpwd = $_POST["newpwd"];
    $renpwd = $_POST["renpwd"];
      
    $username=$_SESSION["username"];
     
    $oqr = mysql_query("select password from elogin where username='{$username}'") or die(mysql_error());
        $data = mysql_fetch_row($oqr);
    
    if($data[0]==$oldpwd)
    {
        if($newpwd == $renpwd)
        {
        $q = mysql_query("update elogin set password='{$newpwd}' where username='{$username}'") or die(mysql_error());
            if($q)
            {
                echo"<script>alert('Password Changed Successfully')</script>";
            }
            
        }
        else
        {
            echo"<script>alert('Passwords dosen't match')</script>";
        }
        
    }
    else{
        echo"<script>alert('Old Password not match')</script>";
    }
}


?>
<!DOCTYPE html>
<html>
 <head>
 	<meta charset="utf-8">
 	<title>change pwd</title>
 	<link rel="stylesheet" href="style.css">
    <script src="jquery-3.1.1.min.js"></script>
      <script type="text/javascript">
     $(document).ready(function(){
         $('.signIn').click(function(){
             $('.fold').toggleClass('active')
         })
     })
     </script>
</head> 
<body>
	<div class="container">
	<div class="signIn">Change Password</div>
	<div class="fold">
		<form method="post">
			<input type="password" name="oldpwd"  placeholder="OldPwd"  required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for User Name" >
			<input type="password" name="newpwd" placeholder="NewPwd" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password" >
            <input type="password" name="renpwd" placeholder="ReEnterpwd" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password" >

			<input type="submit" name="" value="Submit">
			<a href="empui.php">Back</a>
		</form>
	</div>
</div>
</body>
</html>