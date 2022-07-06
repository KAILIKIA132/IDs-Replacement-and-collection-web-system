<?php
include_once 'colledb.php';
//echo "we are";
if(isset($_POST['idno']))
{    
   $idno = $_POST['idno'];
   $status = $_POST['status'];
     echo "helllo";
     $sql = "INSERT INTO collection (idno,status)
     VALUES ('$idno','$status')";
     if (mysqli_query($conn, $sql)) {
       // echo "New record has been added successfully !";
      header("location: collectioniput.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>