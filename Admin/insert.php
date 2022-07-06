<?php
include_once 'db.php';
//echo "we are";
if(isset($_POST['idno']))
{    
   $idno = $_POST['idno'];
   $birthcert = $_POST['birthcert'];
   $dob = $_POST['dob'];
   $email = $_POST['email'];
     $obno = $_POST['obno'];
     $phone = $_POST['phone'];
     $location = $_POST['location'];
     $message = $_POST['txtMessage'];
     //echo "helllo";
     $sql = "INSERT INTO rep (idno,birthcert,dob,email,obno,phone,location,message)
     VALUES ('$idno','$birthcert','$dob','$email','$obno','$phone','$location','$message')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header("location: replacement.html");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>