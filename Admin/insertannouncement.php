<?php
include_once 'announcedb.php';
//echo "we are";
if(isset($_POST['Submit']))
{    
   $announcement_date=$_POST['announce_date'];
   $announcement = $_POST['announcement'];
     //echo "helllo";
     $sql = "INSERT INTO announce (announcement_date,announcement)
     VALUES ('$announcement_date','$announcement')";
     if (mysqli_query($conn, $sql)) {
       // echo "New record has been added successfully !";
     header("location: announcement.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>