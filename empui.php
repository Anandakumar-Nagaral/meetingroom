
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sider Menu Bar CSS</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<?php
session_start();
    echo "<div style='text-align:center'><h1 style='color:#158000'>Welcome--". $_SESSION['username']."!</h1></div>";
?>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Meeting Room Solution</header>
  <ul>
    <li><a href="slider1.php"><i class="fas fa-qrcode"></i>Home</a></li>
    <li><a href="med.html"><i class="fas fa-calendar-week"></i>Meeting Emp Details</a></li>
    <li><a href="chgpwd.php"><i class="far fa-question-circle"></i>Change psw</a></li>
      <li><a href="disp.php"><i class="far fa-question-circle"></i>Details</a></li>
      <li><a href="logindb.php"><i class="far fa-question-circle"></i>Logout</a></li>
  </ul>
    </div>
 <section></section>
  </body>
</html>
