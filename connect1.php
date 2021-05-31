<?php 
   
$empid = filter_input(INPUT_POST, 'empid');
$title = filter_input(INPUT_POST, 'title');
$memberdate = filter_input(INPUT_POST, 'memberdate');
$starttime = filter_input(INPUT_POST, 'starttime');
$endtime = filter_input(INPUT_POST, 'endtime');
$snacks = filter_input(INPUT_POST, 'snacks');

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "meeting room";
    $conn = new mysqli ($host,$dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_error().')'
                . mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO mrdetails (empid, title, memberdate, starttime, endtime, snacks)
            values ('$empid','$title','$memberdate','$starttime','$endtime','$snacks')";
            
            if($conn->query($sql)){
            echo "<script>alert('Booking Successfull!!')</script>";
        }
        else{
            echo "ERROR: " .$sql ."<br>". $conn->error;
        }
            $conn->close();
    }
    header("location:empui.php");
?>
