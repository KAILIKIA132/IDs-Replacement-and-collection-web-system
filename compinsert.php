<?php
include_once 'compdb.php';
echo "we are";
if(isset($_POST['Submit']))
{    
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $complain = $_POST['complain'];
    // echo "helllo";
     $sql = "INSERT INTO cmplain (email,phone,complain)
     VALUES ('$email','$phone','$complain')";
     if (mysqli_query($conn, $sql)) {
       // echo "New record has been added successfully !";
      header("location: complains.html");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>