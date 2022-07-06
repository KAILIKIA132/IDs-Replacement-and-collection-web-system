<?php
session_start();
if(!isset($_SESSION['email']))
{
  header("Location:index.html");
}
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
div {
  border-radius: 50px;
  
}
.marquee {
        background-image: url(Flag-Kenya.jpg);
        width: 1500px;
        height: 180px;
        -webkit-animation: marquee 4s infinite linear;
        
        outline:1px solid blue;
      }
      
      @-webkit-keyframes marquee {
        0% {
          background-position: 0;
        }
      
        100% {
          background-position: -1190px;
        }
</style>
   </head>
<body>
<!--<img src="Flag-Kenya.jpg" style="width:1500px;height:200px;">-->
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">IDs</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="replacement.html">
            <i class='bx bx-box' ></i>
            <span class="links_name">IDs Replacement</span>
          </a>
        </li>
        <li>

          <a href="collection.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">IDs Collection</span>
          </a>
        </li>
        <li>
          <a href="complains.html">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">IDs Complains</span>
          </a>
        </li>
        <li>
          <a href="seeannouncement.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Announcements</span>
          </a>
        </li>
        <li>
          <a href="news.html">
            <i class='bx bx-user' ></i>
            <span class="links_name">News Post</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard"> <marquee style="color:red;">KENYA IDENTITY CARD REPLACEMENT AND COLLECTION UPDATE</marquee></span>
      </div>
      
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name"><?php echo $email?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    
      </div>
      
      <p style="text-align: center;,font-size: 56px;,margin-top:5%"> 
<pre>





There are four (4) types of categories of Kenya National Identity Card registration as listed below:-<br>
      
1. Initial Registration<br>
2. Replacement Registration<br>
3. Duplicate Registration<br>
4. Change of Particulars
</pre>
<h1><b>NB/This site only deals with Replacement registration and collection of IDs</b></h1></p>
<img src="miguna.jpg" alt="Italian Trulli" style="width:500px;height:300px;">
</body>
</html>

