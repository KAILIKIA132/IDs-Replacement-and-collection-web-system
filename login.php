<?php 
require('connection.php');
if(isset($_POST['submit']))
{
 $email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from users where email='$email' and password='$password'";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$no=mysqli_num_rows($result);
if($no==1)
{
    session_start();
    $_SESSION['email']=$email;
    header("location:dashboard.php");
}
else{
    header("location:index.php?error=wrong email or password");
}
}