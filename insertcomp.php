<?php
include_once 'dbcomp.php';
echo "we are";
if(isset($_POST['Submit']))
{    
   
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $message = $_POST['message'];
     echo "helllo";
     $sql = "INSERT INTO complain (email,phone,message)
     VALUES ('$email','$phone','$message')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header("location: complains.html");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>