<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style4.css">
       <?php
session_start();
     echo "<div style='text-align:center'><h1 style='color:#DDFF33'>Welcome--". $_SESSION['username']."!</h1></div>";
?>
  </head>
  <body>
      
      
    <div class="slidershow middle">

      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="2.jpeg" alt="">
        </div>
        <div class="slide">
          <img src="3.jpeg" alt="">
        </div>
        <div class="slide">
          <img src="4.jpeg" alt="">
        </div>
        <div class="slide">
          <img src="5.jpeg" alt="">
        </div>
      </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
    </div>
      <h2 style="position:absolute; left: 36%; right:20%; bottom: 8%;color:orange;">These are some of our Meeting Rooms</h2>
      <a href="empui.php"><button style="position:absolute; left: 48%; right:20%; bottom: 5%;padding:07px 15px;border-radius:12px;background-color:green;float:left;">BACK</button></a>
  </body>
</html>
