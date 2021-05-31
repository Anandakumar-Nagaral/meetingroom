<!DOCTYPE html>
<html>
 <head>
 	<meta charset="utf-8">
 	<title>Forgot Password</title>
 	<link rel="stylesheet" href="style3.css">
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
        <div class="signIn">Forgot Password</div>
        <div class="fold">
 		<form method="post">
 			<input type="number" name="id" placeholder="Empid" required pattern="[6789][0-9]{8}">
			<input type="submit" name="submit" value="submit">
            <a href="logindb.php">Back</a>
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
    $id = $_POST['id'];
   /* $MobileNo=$_POST['MobileNo'];*/
    $select=mysql_query("select * from elogin");
    while($result=mysql_fetch_array($select))
    {
        $ids=$result['id'];
      /*  $Num=$result['MobileNo']; */
        if( $ids==$id)  /*$Num!=$MobileNo ||*/
        {
             echo "<script>alert('Message has been sent to your mobile number')</script>";
        }
        else
        {
            
            echo "<script>alert('Entered mobile number is incorrect please enter correct mobile nnumber')</script>";    
        }
    }
}
?>