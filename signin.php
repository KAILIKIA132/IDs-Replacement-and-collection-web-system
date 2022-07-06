
<?php
require('connection.php');
$error="";
if(isset($_POST['submit']))
{
  $email=$_POST['email'];
  $password=$_POST['password_1'];
  $password1=$_POST['password_2'];
  if($password==$password1)
  {
    if(mysqli_query($conn,"insert into users(email,password) values('$email','$password')")){
      header("location:index.php");
    }
  else{
    $error="Email already exist";
  }
    
  }
  else{
    $error="passwords don't match";
  }
  
}

?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <!----<title>Login Form Design | CodeLab</title>---->
    <link rel="stylesheet" href="style.css">
    <style>
      body{
        display: grid;
        height: 100%;
        width: 100%;
        place-items: center;
        background-image: url('Flag-Kenya.jpg');
        /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
      }
      .imgcontainer {
        text-align: center;
        margin: 0px 0 0px 0;
        margin-top: 0%;
      }
      img.avatar {
        width: 70%;
        border-radius: 50%;
      }
      .title{
        text-align: center;
        margin: 0px 0 0px 0;
        margin-top: 0%;
      }
      img.logoo {
        width: 30%;
        border-radius: 50%;
      }
      h1   {color:red;}
      
      </style>
  </head>
  <body>
<h1 style="color: white;">WELCOME TO KENYA ONLINE IDs REPLACEMENT APPLICATION AND COLLECTION</h1>
<div class="imgcontainer">
  <img src="img_avatar2.png" alt="Avatar" class="avatar">
</div>
    <div class="wrapper">
      <div class="title">
        <img src="img_logoo.jpg" alt="logoo" class="logoo">
      </div>
      <form method="post" action="signin.php">
    
        <div class="field">
 
            <input type="text" name="email" required>
            <label>Email Address</label>
            
          </div>
        <div class="field">
            <input type="password" name="password_1" required>
            <label>Password</label>
          </div>
        <div class="field">
            <input type="password" name="password_2" required>
            <label>Confirm Password</label>
          </div>
          <label style="color:red"><?php echo $error?></label>
        <div class="field">
          <input type="submit" name="submit" value="submit">
        </div>
      </form>
    </div>
  </body>
</html>
