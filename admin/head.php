<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script>
        $(document).ready(function(){
            // Toggle submenu when a parent menu item is clicked
            $('.submenu > a').click(function(e){
                e.preventDefault(); // Prevent default link behavior
                $(this).next('ul').slideToggle();
            });
        });
    </script>

    <style>

        .header {
        background: #9D3C72;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        left: 0;
        position: fixed;
        right: 0;
        top: 0;
        z-index: 1001;
        height: 60px;
        }
        
        
    
        .sidebar {
        background-color: #D9ACF5;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        bottom: 0;
        left: 0;
        margin-top: 0;
        position: fixed;
        overflow-y: auto;
        top: 60px;
        transition: all 0.2s ease-in-out 0s;
        width: 250px;
        z-index: 1001;
        }
        .sidebar.opened {
        -webkit-transition: all 0.4s ease;
        -moz-transition: all 0.4s ease;
        transition: all 0.4s ease;
        }
        .sidebar-inner {
        height: 100%;
        min-height: 100%;
        transition: all 0.2s ease-in-out 0s;
        }
        .sidebar-menu {
        padding: 15px;
        }
        .sidebar-menu ul {
        font-size: 15px;
        list-style-type: none;
        margin: 0;
        padding: 0;
        position: relative;
        }
        .sidebar-menu li a {
        color: #fff;
        display: block;
        font-size: 16px;
        height: auto;
        padding: 0 20px;
        }
        .sidebar-menu li a:hover {
        color: #2962ff;
        }
        .sidebar-menu > ul > li > a:hover {
        background-color: #e8e8e8;
        color: #000;
        }
        .sidebar-menu > ul > li.active > a:hover {
        background-color: #0044ff;
        color: #fff;
        }
        .sidebar-menu li.active a {
        background-color: #2962ff;
        color: #fff;
        }
        .menu-title {
        color: #9e9e9e;
        display: flex;
        font-size: 14px;
        opacity: 1;
        padding: 5px 15px;
        white-space: nowrap;
        }
        .menu-title > i {
        float: right;
        line-height: 40px;
        }
        .sidebar-menu li.menu-title a {
        color: #ff9b44;
        display: inline-block;
        margin-left: auto;
        padding: 0;
        }
        .sidebar-menu li.menu-title a.btn {
        color: #fff;
        display: block;
        float: none;
        font-size: 15px;
        margin-bottom: 15px;
        padding: 10px 15px;
        }
        .sidebar-menu ul ul a.active {
        color: #2962ff;
        text-decoration: underline;
        }
        .mobile_btn {
        display: none;
        float: left;
        }
        .sidebar .sidebar-menu > ul > li > a span {
        transition: all 0.2s ease-in-out 0s;
        display: inline-block;
        margin-left: 10px;
        white-space: nowrap;
        }
        .sidebar .sidebar-menu > ul > li > a span.chat-user {
        margin-left: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        }
        .sidebar .sidebar-menu > ul > li > a span.badge {
        margin-left: auto;
        }
        .sidebar-menu ul ul a {
        display: block;
        font-size: 15px;
        padding: 7px 10px 7px 45px;
        position: relative;
        }
        .sidebar-menu ul ul {
        display: none;
        }
        .sidebar-menu ul ul ul a {
        padding-left: 65px;
        }
        .sidebar-menu ul ul ul ul a {
        padding-left: 85px;
        }
        .sidebar-menu > ul > li {
        margin-bottom: 3px;
        position: relative;
        }
        .sidebar-menu > ul > li:last-child {
        margin-bottom: 0;
        }
        .sidebar-menu .menu-arrow {
        -webkit-transition: -webkit-transform 0.15s;
        -o-transition: -o-transform 0.15s;
        transition: transform 0.15s;
        position: absolute;
        right: 15px;
        display: inline-block;
        font-family: "FontAwesome";
        text-rendering: auto;
        line-height: 40px;
        font-size: 16px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
        line-height: 18px;
        top: 11px;
        }
        .sidebar-menu .menu-arrow:before {
        content: "\f105";
        }
        .sidebar-menu li a.subdrop .menu-arrow {
        -ms-transform: rotate(90deg);
        -webkit-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        }
        .sidebar-menu ul ul a .menu-arrow {
        top: 10px;
        }
        .sidebar-menu > ul > li > a {
        align-items: center;
        border-radius: 3px;
        display: flex;
        justify-content: flex-start;
        padding: 8px 15px;
        position: relative;
        transition: all 0.2s ease-in-out 0s;
        }
        .sidebar-menu ul li a i {
        display: inline-block;
        font-size: 24px;
        line-height: 24px;
        text-align: left;
        vertical-align: middle;
        width: 20px;
        transition: all 0.2s ease-in-out 0s;
        }
        .sidebar-menu ul li.menu-title a i {
        font-size: 16px !important;
        margin-right: 0;
        text-align: right;
        width: auto;
        }
        .sidebar-menu li a > .badge {
        color: #fff;
        }

        .sidebar-menu .menu-arrow {
        -webkit-transition: -webkit-transform 0.15s;
        -o-transition: -o-transform 0.15s;
        transition: transform 0.15s;
        position: absolute;
        right: 15px;
        display: inline-block;
        font-family: "FontAwesome";
        text-rendering: auto;
        line-height: 40px;
        font-size: 16px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
        line-height: 18px;
        top: 11px;
        }
        .sidebar-menu .menu-arrow:before {
        content: "\f105";
        }
        .sidebar-menu li a.subdrop .menu-arrow {
        -ms-transform: rotate(90deg);
        -webkit-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        }
        .sidebar-menu ul ul a .menu-arrow {
        top: 10px;
        }

        /* .menu-title {
        color: #a3a3a3;
        display: block;
        font-size: 14px;
        margin-bottom: 5px;
        padding: 0 25px;
        } */

        .menu-title {
        color: #9D3C72;
        display: flex;
        font-size: 14px;
        opacity: 1;
        padding: 5px 15px;
        white-space: nowrap;
        }
        .menu-title > i {
        float: right;
        line-height: 40px;
        }

        a {
            text-decoration: none;
            font-size: 16px !important;
            color: black !important;
            font-weight: bold;
        }

    </style>
</head>
<body>


<div class="header">
			
            
        </div>


            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li> 
								<a href="dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							 
						
							<li class="menu-title"> 
								<span>All Users</span>
							</li>
						
							<li class="submenu">
								<a href="#"><ion-icon name="person"></ion-icon> <span> All Users </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="adminlist.php"> Admin </a></li>
									<li><a href="userlist.php"> Users </a></li>
									<li><a href="useragent.php"> Agent </a></li>
									<li><a href="userbuilder.php"> Builder </a></li>
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
								<a href="#"><i class="fe fe-comment"></i> <span> Contact,Feedback </span> <span class="menu-arrow"></span></a>
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

							<li class="menu-title"> 
								<span>Ad Poster</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-map"></i> <span> Poster Page </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="addposter.php"> Add Poster </a></li>
									<li><a href="addposterview.php"> View Poster </a></li>
									<li><a href="postleadview.php"> View Poster contact </a></li>
									<li><a href="leadview.php"> Lead View  </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Query</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-comment"></i> <span> VMart </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="vmartenqueryview.php"> Enquery </a></li>
									<li><a href="vmartcontactview.php"> Contact </a></li>
								</ul>
							</li>

							<li class="menu-title"> 
								<span>Reviews</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-browser"></i> <span> Review Page </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="aboutadd.php"> Add About Content </a></li>
									<li><a href="reviewlook.php"> View Review </a></li>
								</ul>
							</li>
							
						</ul>
					</div>
                </div>
            </div>


                
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>