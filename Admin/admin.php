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
          <a href="repapplied.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">View Replacement Applied</span>
          </a>
        </li>
        <li>
          <a href="collectioniput.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Ready ID</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="viewcomp.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">View IDs Complains</span>
          </a>
        </li>
        <li>
          <a href="announcement.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Make Announcements</span>
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
          <a href="admin.php">
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
        <span class="dashboard">ADMINITRATOR</span>
      </div>
      
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name"><?php echo $email?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Replacement Applied</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <span class="text">Up from last 3 months</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">IDs processed</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <span class="text">Up from last 3 months</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">IDs collected</div>
            <div class="number">12,876</div>
            <div class="indicator">
              <span class="text">Up from last 3 months</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Uncollected IDs</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <span class="text">Down From 3 months</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>
      
     

</body>
</html>

