<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> Responsive Sidebar Menu </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- style css -->

 
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


  <style>
    /* CSS for Sidebar */
    .sidebar {
      position: fixed;
      left: 0;
      top: 0;
      bottom: 0;
      width: 260px;
      /* Adjust width as needed */
      background: #fff;
      background: pink;
      overflow-y: auto;
      border-right: 1px solid #eee;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      z-index: -99;
    }

    .sidebar-inner {
      padding: 20px;
    }

    .sidebar-menu ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .sidebar-menu li {
      padding: 10px 0;
    }

    .sidebar-menu li a {
      display: block;
      color: #333;
      text-decoration: none;
    }

    .sidebar-menu li a:hover {
      background: #f4f4f4;
    }

    .sidebar-menu .menu-title {
      font-weight: 700;
      color: #555;
    }

    .sidebar-menu .submenu {
      margin-left: 15px;
    }

    .sidebar-menu .submenu ul {
      display: none;
    }

    .sidebar-menu .submenu:hover ul {
      display: block;
    }

    .sidebar-menu .submenu ul li {
      padding: 5px 0;
    }

    .sidebar-menu .submenu ul li a {
      padding-left: 15px;
    }




    /* slifyvxgyfcgygdjg */

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      z-index: 999;
    }

    .navbar-left {
      display: flex;
      align-items: center;
    }

    .navbar-left .logo img {
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }

    .navbar-right a {
      color: #fff;
      text-decoration: none;
      padding: 5px 10px;
      border: 1px solid #fff;
      border-radius: 5px;
    }

    .navbar-right a:hover {
      background-color: #fff;
      color: #333;
    }

    .menu_head {
      font-size: 25px;
    }


    /* Style the dropdown button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* Style the dropdown content */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

   
  </style>

</head>

<body>
  <!-- <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-codepen icon' style="color: white;"></i>
      <div class="logo_name">SideMenu</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">

        <li class="submenu">
          <a href="#"><i class='bx bx-grid-alt'></i><span  class="links_name"> Property</span> <span class="menu-arrow"></span></a>
          <ul style="display: ;">
            <li><a href="propertyadd.php"> Add Property</a></li>
            <li><a href="propertyview.php"> View Property </a></li>
          <span class="links_name">Dashboard</span>

            
          </ul>
        </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-user'></i>
          <span class="links_name">User</span>
        </a>
        <span class="tooltip">User</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-chat'></i>
          <span class="links_name">Messages</span>
        </a>
        <span class="tooltip">Messages</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Analytics</span>
        </a>
        <span class="tooltip">Analytics</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-folder'></i>
          <span class="links_name">File Manager</span>
        </a>
        <span class="tooltip">Files</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cart-alt'></i>
          <span class="links_name">Order</span>
        </a>
        <span class="tooltip">Order</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-heart'></i>
          <span class="links_name">Saved</span>
        </a>
        <span class="tooltip">Saved</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          <i class='bx bx-export'></i>
          <div class="name_job">
            <div class="name">Logout</div>
          </div>
        </div>
        <i class='bx bx-log-out' id="log_out"></i>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="text">Dashboard</div>
  </section> -->


  <!-- <nav class="navbar">
    <div class="navbar-left">
      <a href="#" class="logo">
        <img src="#" alt="Logo">
      </a>
      <button class="btn">Button</button>
    </div>
    <div class="navbar-right">
      <a href="logout.php">Logout</a>
    </div>
  </nav> -->


  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
      <div id="sidebar-menu" class="sidebar-menu mt-5">
        <!-- <ul >
          <li class="menu-title">
            <span>Main</span>
          </li>
          <li>
            <a href="dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
          </li>

          <li class="menu-title"> 
								<span>Authentication</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="index.php"> Login </a></li>
									<li><a href="register.php"> Register </a></li>
									
								</ul>
							</li>
          <li class="menu-title">
            <span>All Users</span>
          </li>

          <li class="submenu">
            <a href="#"><i class="fe fe-user"></i> <span> All Users </span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
              <li><a href="adminlist.php"> Admin </a></li>
              <li><a href="userlist.php"> Users </a></li>
              <li><a href="useragent.php"> Agent </a></li>
              <li><a href="userbuilder.php"> Builder </a></li>
            </ul>
          </li>

          <li class="menu-title">
            <span>State & City</span>
          </li>

          <li class="submenu">
            <a href="#"><i class="fe fe-location"></i> <span>State & City</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
              <li><a href="stateadd.php"> State </a></li>
              <li><a href="cityadd.php"> City </a></li>
            </ul>
          </li>

          <li class="menu-title">
            <span>Property Management</span>
          </li>
          <li class="submenu">
            <a href="#"><i class="fe fe-map"></i> <span> Property</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
              <li><a href="propertyadd.php"> Add Property</a></li>
              <li><a href="propertyview.php"> View Property </a></li>

            </ul>
          </li>



          <li class="menu-title">
            <span>Query</span>
          </li>
          <li class="submenu">
            <a href="#"><i class="fe fe-comment"></i> <span> Contact,Feedback </span> <span
                class="menu-arrow"></span></a>
            <ul style="display: none;">
              <li><a href="contactview.php"> Contact </a></li>
              <li><a href="feedbackview.php"> Feedback </a></li>
            </ul>
          </li>
          <li class="menu-title">
            <span>About</span>
          </li>
          <li class="submenu">
            <a href="#"><i class="fe fe-browser"></i> <span> About Page </span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
              <li><a href="aboutadd.php"> Add About Content </a></li>
              <li><a href="aboutview.php"> View About </a></li>
            </ul>
          </li>
          <li class="submenu" id="about_submenu">
            <a href="#" id="about_link">
              <i class="fe fe-browser"></i> <span> About Page </span> <span class="menu-arrow"></span>
            </a>
            <ul style="display: none;" id="about_dropdown">
              <li><a href="aboutadd.php"> Add About Content </a></li>
              <li><a href="aboutview.php"> View About </a></li>
            </ul>
          </li>
        </ul> -->
        
        <div class="dropdown">
          <button class="dropbtn">Fish <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
              <a href="#">Sea Fish</a>
              <a href="#">Kuttai Fish</a>
          </div>
        </div>



          
        
      </div>
    </div>
  </div>
  

    

   

    

  <script src="./asset/script.js"></script>
</body>

</html>