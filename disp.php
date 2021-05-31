<?php
$host ="localhost";
$user ="root";
$password ="";
$database ="meeting room";

$empid ="";
$title ="";
$memberdate="";
$starttime="";
$endtime="";
$snacks="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    try
    {
        $connect = mysqli_connect($host, $user, $password, $database);
    }
    catch(Exception $ex)
    {
      echo 'error';  
    }
function getPosts()
{
 $posts =array();
 $posts[0] = $_POST['empid'];
     $posts[1] =$_POST['title'];
     $posts[2] =$_POST['memberdate'];
     $posts[3] =$_POST['starttime'];
     $posts[4] =$_POST['endtime'];
     $posts[5] =$_POST['snacks'];
    return $posts;
}
if(isset($_POST['search']))
{
    $data = getPosts();
    
    $searchQuery = "SELECT * FROM mrdetails WHERE empid = $data[0]";
    
    $search_Result = mysqli_query($connect, $searchQuery);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                
$empid = $row['empid'];
$title = $row['title'];
$memberdate= $row['memberdate'];
$starttime= $row['starttime'];
$endtime= $row['endtime'];
$snacks= $row['snacks'];

            }
        }
        else
        {
            echo "<script>alert('No data for this id')</script>";
        }
    }
    else
    {
        echo 'Result error';
    }
}
?>
<html>
<head>
<title>display data</title>    
    </head>
    <body background="bg.jpeg">
    <form method="post" align="center">
        
            <input type="number" name="empid"  placeholder="Emp Id" style="position:absolute; left: 43%; right:30%; bottom: 63%;padding:07px 15px;border-radius:12px;background-color:yellow;" required="" value="<?php echo $empid; ?>">
			<input type="text" name="title" placeholder="Title" style="position:absolute; left: 43%; right:30%; bottom: 57%;padding:07px 15px;border-radius:12px;background-color:yellow;"  value="<?php echo $title; ?>">           
            <input type="text" name="memberdate" placeholder="Member Date" style="position:absolute; left: 43%; right:30%; bottom: 51%;padding:07px 15px;border-radius:12px;background-color:yellow;" value="<?php echo $memberdate; ?>">
            <input type="text" name="starttime" placeholder="Start Time" style="position:absolute; left: 43%; right:30%; bottom: 45%;padding:07px 15px;border-radius:12px;background-color:yellow;" value="<?php echo $starttime; ?>">
            <input type="text" name="endtime" placeholder="End Time" style="position:absolute; left: 43%; right:30%; bottom: 39%;padding:07px 15px;border-radius:12px;background-color:yellow;" value="<?php echo $endtime; ?>">
            <input type="text" name="snacks" placeholder="Snaks" style="position:absolute; left: 43%; right:30%; bottom: 33%;padding:07px 15px;border-radius:12px;background-color:yellow;" value="<?php echo $snacks; ?>">
        
             <div >
               
               <input type="submit" name="search"  value="Show" style="position:absolute; left: 45%; right:30%; bottom: 25%;padding:07px 15px;border-radius:12px;background-color:green;float:left;">
                 <a href="empui.php"><input type="button" name="back"  value="Back" style="position:absolute; left: 50%; right:20%; bottom: 25%;padding:07px 15px;border-radius:12px;background-color:green;float:left;"></a>
             </div>
        </form>
    </body>
</html>