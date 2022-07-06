<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
<link rel="stylesheet" href="style.css">
<style>
  body{
    place-items: center;
   
    
    background-position: center;
    background-position:top;
    border-radius: 50px;
        
    
    /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
  }
  div {
        
    border-radius: 50px;
    
  }
    .logo1{
        text-align: center;
        margin: 0px 0 0px 0;
        margin-top: 0%;
      }
      img.logggo {
        width: 18%;
        border-radius: 50%;
      }
      
      
</style>
</head>

<body>
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
          <a href="#">
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
        <span class="dashboard">ADMINISTRATOR ID STATUS UDATE TO THE CITIZENS</span>
      </div>
      
      <!--<div class="profile-details">
        <img src="images/profile.jpg" alt=""
        <span class="admin_name"><?php echo $email?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>>-->
    </nav>

    
      </div>
      <pre>
      </pre>
<fieldset>
    <div class="logo1">
        <img src="img_logggo.jpg" alt="logggo" class="logggo">
    </div>
    
<legend><p style="color: white;">processed filling Form</p></legend>
<form name="frmContact" action="colleinsert.php" method="post" >  
<p style="padding-top: 30px;">
<label for="email">IdNo<span class="required">*</span></label>
<input type="text" name="idno" id="txtEmail" required>
<label for="name">Status<span class="required">*</span></label>
<input type="text" name="status" id="txtPhone" required>
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p><br>
<p>
    <span class="required">*</span>Required field
  </p>
</div>
</form>
</fieldset>
</body>
</html>