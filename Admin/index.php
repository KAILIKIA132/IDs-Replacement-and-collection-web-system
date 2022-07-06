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
<h1 style="color: white;">ADMINISTRATION FOR IDs REPLACEMENT APPLICATION AND COLLECTION</h1>
<div class="imgcontainer">
  <img src="img_avatar2.png" alt="Avatar" class="avatar">
</div>
    <div class="wrapper">
      <div class="title">
        <img src="img_logoo.jpg" alt="logoo" class="logoo">
      </div>
      <form action="login.php" method="POST">
        <div class="field">
          <input type="text" name="email" required>
          <label>Email Address</label>
        </div>
        <div class="field">
          <input type="password"name="password" required>
          <label>Password</label>
        </div>
        <span style="color:red"><?php 
        if(isset($_GET['error']))
        {
          echo $_GET['error']; 
        }
        ?>
        </span>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
        </div>
        <div class="field">
          <input type="submit" name="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="signin.php">Signup now</a></div>
      </form>
    </div>
  </body>
</html>
