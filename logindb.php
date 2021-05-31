<!DOCTYPE html>
<html>
 <head>
 	<meta charset="utf-8">
 	<title> Emp Login</title>
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
	<div class="signIn">Employee Log In</div>
	<div class="fold">
		<form method="post" >
			<input type="text" name="username"  placeholder="Username"  required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for User Name" >
			<input type="password" name="password"  placeholder="Password" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password" >
			<input type="submit" name="submit"  value="Login">
           
			<a href="forgot.php">Forgot Password</a>
		</form>
	</div>
</div>
</body>
</html>
<?php 
session_start();
$connect=mysql_connect("localhost","root","");
$select=mysql_select_db("meeting room",$connect);
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select=mysql_query("select username,password from elogin where username='{$username}'");
    while($result=mysql_fetch_array($select))
    {
        $name=$result['username'];
        $passwords=$result['password'];
        if($passwords!=$password || $name!=$username)
        {
             echo "<script>alert('Incorrect username & password')</script>";
        }
        else
        {
            
            $_SESSION['username']=$username;
                 header("location:empui.php");
        }
    }
}
?>















