


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Engagement&family=Parisienne&display=swap" rel="stylesheet">

  <!-- icon link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <style>
    .head{
      background-color: #A10035;
    }
    .navbar-brand {
      font-family: "Engagement", cursive;
      font-size: 30px;
      padding-left: 50px;
      font-weight: 400;
      color: white;
    }

    .nav-link {
      font-family: Georgia, 'Times New Roman', Times, serif;
      font-size: 18px;
      color: white !important;
      margin-left: 20px;
    }

    .nav-item button a{
      color: white;
      text-decoration: none;
    }

    .mdn-accordion {
        width: 300px !important;
        margin-top: 0px;
        border-radius: 15px;
    }

    .dropdown-menu {
      border: none;
      margin-top: 15px !important;
    }

    
@media screen and (min-width: 769px) and (max-width: 1400px) {
  .navbar-nav{
    padding-left: 100px;
  }
  .rigt{
    padding-right: 100px;
    gap: 50px;
  }
  }
  @media screen and (min-width: 320px) and (max-width: 768px) {
    .rigt {
      gap: 20px;
    }    
    .navbar-brand {
      padding-left: 20px;
    }
  }


  /* dropdown items style code  */

  
.mdn-accordion,
.mdn-accordion *{
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding:0;
	margin:0;
}

.mdn-accordion {
	width: 18%;
	max-width: 700px;
	/* margin: 4em auto; */
	font-family:"Merriweather", Arial, Helvetica, sans-serif;
	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
	font-weight:400;
	background:#fff;
}

.mdn-accordion,
.mdn-accordion ul,
.mdn-accordion ul li{ list-style: none; }
.mdn-accordion ul { display: none; }


/* @checkbox or radio 
----------------------------------------------------- */
.mdn-accordion .accordion-toggle {
	position: absolute;
	opacity: 0;
}

/* @first level panels
----------------------------------------------------- */
.mdn-accordion a,  
.mdn-accordion .accordion-title{  
	color:#788B94;
	display: block;
	background:#ffffff; 
	position: relative;
	-webkit-box-shadow: inset 0 -1px #EDF1F2;
	-moz-box-shadow: inset 0 -1px #EDF1F2;
	box-shadow: inset 0 -1px #EDF1F2;
	text-decoration:none;
	font-size:16px;
	padding:15px;
}

.mdn-accordion .accordion-title{ 
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

/* @first level panel :hover
----------------------------------------------------- */
.mdn-accordion a:hover,
.mdn-accordion .accordion-title:hover{ background:#F7F9F9; }

/* @all levels :active panels 
----------------------------------------------------- */
.mdn-accordion .accordion-toggle:checked + .accordion-title{ background:#F7F9F9; }
.mdn-accordion ul .accordion-toggle:checked + .accordion-title{ background:#FDFDFD; }
.mdn-accordion ul ul .accordion-toggle:checked + .accordion-title{ background:#FFFFFF; }


/* @panels with long text
----------------------------------------------------- */
.mdn-accordion a,
.mdn-accordion .accordion-title {
  cursor: pointer;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;  
}

/* @show panel content
----------------------------------------------------- */
.mdn-accordion .accordion-toggle:checked + .accordion-title + ul,
.mdn-accordion .accordion-toggle:checked + .accordion-title:nth-of-type(n) + ul{ display: block; }
.mdn-accordion li a i,
.mdn-accordion .accordion-title i{ 
	font-size:1.1em; 
	margin-right:5px; 
}


/* @second level + 
----------------------------------------------------- */
.mdn-accordion ul a,
.mdn-accordion ul .accordion-title{ 
	-webkit-box-shadow: inset 0 -1px #EDF1F2;
	-moz-box-shadow: inset 0 -1px #EDF1F2;
	box-shadow: inset 0 -1px #EDF1F2; 
	padding-left: 52px; 
}

.mdn-accordion ul ul a,
.mdn-accordion ul ul .accordion-title { padding-left: 80px; }
.mdn-accordion ul ul ul a, 
.mdn-accordion ul ul ul .accordion-title{ padding-left: 110px; }

/* @second level + :hover
----------------------------------------------------- */
.mdn-accordion ul a:hover,
.mdn-accordion ul .accordion-title:hover {
	background:#FDFDFD;
}


/* @accordion arrow  
------------------------------------------------------- */
.mdn-accordion .accordion-title::before{
	width:26px;
	height:26px;
	font-size:1.4em;
	content: "\f105"; 
	position: absolute;
	display: inline-block;
	font-family: FontAwesome;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	-webkit-transition: -webkit-transform 0.4s;
	-moz-transition: -moz-transform 0.4s;
	transition: transform 0.4s;	
	right:10px;
	top: 49%;
}

.mdn-accordion .accordion-toggle:checked + .accordion-title::before{
	top: 45%;
	right:22px;
	-webkit-transform: rotate(90deg);
	-moz-transform: rotate(90deg);
	-ms-transform: rotate(90deg);
	-o-transform: rotate(90deg);
	transform: rotate(90deg);
}

/* @accordion support styles 
------------------------------------------------------- */
.mdn-accordion .mdn-container{ padding:30px; }
.mdn-accordion .mdn-container{ border-bottom:1px solid #EDF1F2; }
.mdn-accordion .mdn-container h1{ 
	font-family:"Merriweather", Arial, Helvetica, sans-serif;
	margin-bottom:10px;
	font-weight:300;
	font-size:32px;
	color:#0099FF;  
}

.mdn-accordion .mdn-container{ color:#788B94; }
.mdn-accordion .mdn-container p{ 
	line-height:22px; 
	margin-top:22px; 
	font-size:14px;
	font-weight:300; 
}

.mdn-accordion .mdn-tagline{ 
	display:block; 
	font-family:"Times New Roman", Times, serif;
	font-weight:700;   
}

.mdn-accordion .mdn-container ul{ 
	display:block; 
	padding:10px 0; 
	list-style-type:disc;
	margin-left:1.2em;
}

.mdn-accordion .mdn-container ul li{ 
	padding:4px 0; 
	display:list-item; 
	list-style-type:disc;
	font-size:14px;
	font-weight:300;
}

.mdn-accordion .mdn-container h3{
	color:#0099FF; 
	font-size:24px;
	font-weight:300;
}

.single-level-accordion .mdn-container p{ margin:0 0 22px 0; }
.mdn-accordion .mdn-container a{ 
	padding:0; 
	margin:0; 
	background:none; 
	display:inline; 
	font-size:inherit; 
	font-weight:normal;
	-webkit-box-shadow:none;
	-moz-box-shadow:none;
	box-shadow:none;
	background:none;
	color:#0099FF; 
}

.mdn-accordion .mdn-container a:hover{
	background:none;
	text-decoration:underline;
}


/* @separated content panels  
----------------------------------------------------------- */
.split-panels {
	-webkit-box-shadow:none;
	-moz-box-shadow:none;
	box-shadow:none;
	background:none;
}

.split-panels .sub-level{ 
	margin:8px 0;
	background: #ffffff; 
	-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
	box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
	-webkit-transition: box-shadow 0.2s;
	-moz-transition: box-shadow 0.2s;
	transition: box-shadow 0.2s;	
}

.split-panels .sub-level:hover{ 
	-webkit-box-shadow: 0 1px 10px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0 1px 10px rgba(0, 0, 0, 0.3);
	box-shadow: 0 1px 10px rgba(0, 0, 0, 0.3);
}

.split-panels .sub-level .mdn-container{ border-bottom:0; }
.split-panels a,  
.split-panels .accordion-title{
	-webkit-box-shadow:none;
	-moz-box-shadow:none;
	box-shadow:none;
}

.split-panels .accordion-toggle:checked + .accordion-title{ 
	-webkit-box-shadow: inset 0 -1px #EDF1F2;
	-moz-box-shadow: inset 0 -1px #EDF1F2;
	box-shadow: inset 0 -1px #EDF1F2;
}

/* @accordion dark theme
------------------------------------------------------- */
.accordion-dark{ background:#0C1318; }
.split-panels.accordion-dark{ background:none; }
.accordion-dark a,  
.accordion-dark .accordion-title{  
	color:#869FA5;
	background:#1C2B36;
	-webkit-box-shadow: inset 0 -1px #223442;
	-moz-box-shadow: inset 0 -1px #223442;
	box-shadow: inset 0 -1px #223442;
}

.accordion-dark ul a,
.accordion-dark ul .accordion-title{ 
	-webkit-box-shadow: inset 0 -1px #223442;
	-moz-box-shadow: inset 0 -1px #223442; 
	box-shadow: inset 0 -1px #223442;
	font-weight:300; 
}

.accordion-dark a:hover,
.accordion-dark ul a:hover,
.accordion-dark .accordion-title:hover,
.accordion-dark ul .accordion-title:hover { background:#182530; }
.accordion-dark .accordion-toggle:checked + .accordion-title{ background:#141F27; }
.accordion-dark ul .accordion-toggle:checked + .accordion-title{ background:#182530; }
.accordion-dark ul ul .accordion-toggle:checked + .accordion-title{ background:#131E26; }
.accordion-dark .mdn-container{ border-bottom:1px solid #223442; color:#869FA5; }
.accordion-dark.split-panels .sub-level{ background:#0C1318; }
.accordion-dark.split-panels .accordion-toggle:checked + .accordion-title{ 
	-webkit-box-shadow: inset 0 -1px #223442;
	-moz-box-shadow: inset 0 -1px #223442;
	box-shadow: inset 0 -1px #223442;
}

.mdn-accordion .mdn-accordion-ripple {
	position: absolute;
	border-radius: 50%;
	pointer-events: none;
	background-color: rgba(255, 255, 255, 0.5);
	-webkit-transform: translate3d(-50%, -50%, 0);
	-moz-transform: translate3d(-50%, -50%, 0);
	-ms-transform: translate3d(-50%, -50%, 0);
	-o-transform: translate3d(-50%, -50%, 0);
	transform: translate3d(-50%, -50%, 0);  
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	opacity: 0.6;
	padding: 0;
	margin: 0;
}

/* Accordion panel themes 
-------------------------------------------------- */

/* @Blue theme
--------------------------------------------------- */
.blue-accordion-theme a,  
.blue-accordion-theme .accordion-title{  
	color:#fff;
	background:#2196F3;
	-webkit-box-shadow: inset 0 -1px #52ACF5;
	-moz-box-shadow: inset 0 -1px #52ACF5;
	box-shadow: inset 0 -1px #52ACF5;
}

.blue-accordion-theme ul a,
.blue-accordion-theme ul .accordion-title{ 
	-webkit-box-shadow: inset 0 -1px #52ACF5;
	-moz-box-shadow: inset 0 -1px #52ACF5; 
	box-shadow: inset 0 -1px #52ACF5;
	font-weight:300; 
}

.blue-accordion-theme a:hover,
.blue-accordion-theme ul a:hover,
.blue-accordion-theme .accordion-title:hover,
.blue-accordion-theme ul .accordion-title:hover { background:#1E88E5; }
.blue-accordion-theme .accordion-toggle:checked + .accordion-title{ background:#1775CA; }
.blue-accordion-theme ul .accordion-toggle:checked + .accordion-title{ background:#1E88E5; }
.blue-accordion-theme ul ul .accordion-toggle:checked + .accordion-title{ background:#2E8EE7; }
.blue-accordion-theme .mdn-container a,
.blue-accordion-theme .mdn-container h1,
.blue-accordion-theme .mdn-container h3{ color:#2196F3; }

/* @Green theme
--------------------------------------------------- */
.green-accordion-theme a,  
.green-accordion-theme .accordion-title{  
	color:#fff;
	background:#4CAF50;
	-webkit-box-shadow: inset 0 -1px #6BC070;
	-moz-box-shadow: inset 0 -1px #6BC070;
	box-shadow: inset 0 -1px #6BC070;
}

.green-accordion-theme ul a,
.green-accordion-theme ul .accordion-title{ 
	-webkit-box-shadow: inset 0 -1px #6BC070;
	-moz-box-shadow: inset 0 -1px #6BC070; 
	box-shadow: inset 0 -1px #6BC070;
	font-weight:300; 
}

.green-accordion-theme a:hover,
.green-accordion-theme ul a:hover,
.green-accordion-theme .accordion-title:hover,
.green-accordion-theme ul .accordion-title:hover { background:#3E9144; }
.green-accordion-theme .accordion-toggle:checked + .accordion-title{ background:#38833D; }
.green-accordion-theme ul .accordion-toggle:checked + .accordion-title{ background:#3E9144; }
.green-accordion-theme ul ul .accordion-toggle:checked + .accordion-title{ background:#449D4A; }
.green-accordion-theme .mdn-container a,
.green-accordion-theme .mdn-container h1,
.green-accordion-theme .mdn-container h3{ color:#4CAF50; }

/* @Pink theme
--------------------------------------------------- */
.pink-accordion-theme a,  
.pink-accordion-theme .accordion-title{  
	color:#fff;
	background:#E91E63;
	-webkit-box-shadow: inset 0 -1px #EF568B;
	-moz-box-shadow: inset 0 -1px #EF568B;
	box-shadow: inset 0 -1px #EF568B;
}

.pink-accordion-theme ul a,
.pink-accordion-theme ul .accordion-title{ 
	-webkit-box-shadow: inset 0 -1px #EF568B;
	-moz-box-shadow: inset 0 -1px #EF568B; 
	box-shadow: inset 0 -1px #EF568B;
	font-weight:300; 
}

.pink-accordion-theme a:hover,
.pink-accordion-theme ul a:hover,
.pink-accordion-theme .accordion-title:hover,
.pink-accordion-theme ul .accordion-title:hover { background:#C91454; }
.pink-accordion-theme .accordion-toggle:checked + .accordion-title{ background:#B31149; }
.pink-accordion-theme ul .accordion-toggle:checked + .accordion-title{ background:#C91454; }
.pink-accordion-theme ul ul .accordion-toggle:checked + .accordion-title{ background:#DB155A; }
.pink-accordion-theme .mdn-container a,
.pink-accordion-theme .mdn-container h1,
.pink-accordion-theme .mdn-container h3{ color:#E91E63; }

/* @Red theme
--------------------------------------------------- */
.red-accordion-theme a,  
.red-accordion-theme .accordion-title{  
	color:#fff;
	background:#F44336;
	-webkit-box-shadow: inset 0 -1px #F76D62;
	-moz-box-shadow: inset 0 -1px #F76D62;
	box-shadow: inset 0 -1px #F76D62;
}

.red-accordion-theme ul a,
.red-accordion-theme ul .accordion-title{ 
	-webkit-box-shadow: inset 0 -1px #F76D62;
	-moz-box-shadow: inset 0 -1px #F76D62; 
	box-shadow: inset 0 -1px #F76D62;
	font-weight:300; 
}

.red-accordion-theme a:hover,
.red-accordion-theme ul a:hover,
.red-accordion-theme .accordion-title:hover,
.red-accordion-theme ul .accordion-title:hover { background:#DA1C0C; }
.red-accordion-theme .accordion-toggle:checked + .accordion-title{ background:#AF160A; }
.red-accordion-theme ul .accordion-toggle:checked + .accordion-title{ background:#DA1C0C; }
.red-accordion-theme ul ul .accordion-toggle:checked + .accordion-title{ background:#E81D0D; }
.red-accordion-theme .mdn-container a,
.red-accordion-theme .mdn-container h1,
.red-accordion-theme .mdn-container h3{ color:#F44336; }

/* @Purple theme
--------------------------------------------------- */
.purple-accordion-theme a,  
.purple-accordion-theme .accordion-title{  
	color:#fff;
	background:#9C27B0;
	-webkit-box-shadow: inset 0 -1px #B02DC8;
	-moz-box-shadow: inset 0 -1px #B02DC8;
	box-shadow: inset 0 -1px #B02DC8;
}

.purple-accordion-theme ul a,
.purple-accordion-theme ul .accordion-title{ 
	-webkit-box-shadow: inset 0 -1px #B02DC8;
	-moz-box-shadow: inset 0 -1px #B02DC8; 
	box-shadow: inset 0 -1px #B02DC8;
	font-weight:300; 
}

.purple-accordion-theme a:hover,
.purple-accordion-theme ul a:hover,
.purple-accordion-theme .accordion-title:hover,
.purple-accordion-theme ul .accordion-title:hover { background:#651A73; }
.purple-accordion-theme .accordion-toggle:checked + .accordion-title{ background:#52145C; }
.purple-accordion-theme ul .accordion-toggle:checked + .accordion-title{ background:#651A73; }
.purple-accordion-theme ul ul .accordion-toggle:checked + .accordion-title{ background:#761F85; }
.purple-accordion-theme .mdn-container a,
.purple-accordion-theme .mdn-container h1,
.purple-accordion-theme .mdn-container h3{ color:#9C27B0; }

/* @Orange theme
--------------------------------------------------- */
.orange-accordion-theme a,  
.orange-accordion-theme .accordion-title{  
	color:#fff;
	background:#FF9800;
	-webkit-box-shadow: inset 0 -1px #FFAC2F;
	-moz-box-shadow: inset 0 -1px #FFAC2F;
	box-shadow: inset 0 -1px #FFAC2F;
}

.orange-accordion-theme ul a,
.orange-accordion-theme ul .accordion-title{ 
	-webkit-box-shadow: inset 0 -1px #FFAC2F;
	-moz-box-shadow: inset 0 -1px #FFAC2F; 
	box-shadow: inset 0 -1px #FFAC2F;
	font-weight:300; 
}

.orange-accordion-theme a:hover,
.orange-accordion-theme ul a:hover,
.orange-accordion-theme .accordion-title:hover,
.orange-accordion-theme ul .accordion-title:hover { background:#EA8C00; }
.orange-accordion-theme .accordion-toggle:checked + .accordion-title{ background:#DF8600; }
.orange-accordion-theme ul .accordion-toggle:checked + .accordion-title{ background:#EA8C00; }
.orange-accordion-theme ul ul .accordion-toggle:checked + .accordion-title{ background:#F09100; }
.orange-accordion-theme .mdn-container a,
.orange-accordion-theme .mdn-container h1,
.orange-accordion-theme .mdn-container h3{ color:#FF9800; }

/* @Indigo theme
--------------------------------------------------- */
.indigo-accordion-theme a,  
.indigo-accordion-theme .accordion-title{  
	/* color:#fff;
	background:#3F51B5; */
	color: black;
	background: white;
	-webkit-box-shadow: inset 0 -1px #5B6BC6;
	-moz-box-shadow: inset 0 -1px #5B6BC6;
	box-shadow: inset 0 -1px #5B6BC6;
}

.indigo-accordion-theme ul a,
.indigo-accordion-theme ul .accordion-title{ 
	-webkit-box-shadow: inset 0 -1px #5B6BC6;
	-moz-box-shadow: inset 0 -1px #5B6BC6; 
	box-shadow: inset 0 -1px #5B6BC6;
	font-weight:300; 
}

.indigo-accordion-theme a:hover,
.indigo-accordion-theme ul a:hover,
.indigo-accordion-theme .accordion-title:hover,
/* .indigo-accordion-theme ul .accordion-title:hover { background:#303E89; } */
.indigo-accordion-theme ul .accordion-title:hover { background: #F0F3FF; }
.indigo-accordion-theme .accordion-toggle:checked + .accordion-title{ background:#293574; }
.indigo-accordion-theme ul .accordion-toggle:checked + .accordion-title{ background:#303E89; }
.indigo-accordion-theme ul ul .accordion-toggle:checked + .accordion-title{ background:#37469B; }
.indigo-accordion-theme .mdn-container a,
.indigo-accordion-theme .mdn-container h1,
.indigo-accordion-theme .mdn-container h3{ color:#3F51B5; }

/* @Turqoise theme
--------------------------------------------------- */
.turqoise-accordion-theme a,  
.turqoise-accordion-theme .accordion-title{  
	color:#fff;
	background:#28C0C6;
	-webkit-box-shadow: inset 0 -1px #67D1D5;
	-moz-box-shadow: inset 0 -1px #67D1D5;
	box-shadow: inset 0 -1px #67D1D5;
}

.turqoise-accordion-theme ul a,
.turqoise-accordion-theme ul .accordion-title{ 
	-webkit-box-shadow: inset 0 -1px #67D1D5;
	-moz-box-shadow: inset 0 -1px #67D1D5; 
	box-shadow: inset 0 -1px #67D1D5;
	font-weight:300; 
}

.turqoise-accordion-theme a:hover,
.turqoise-accordion-theme ul a:hover,
.turqoise-accordion-theme .accordion-title:hover,
.turqoise-accordion-theme ul .accordion-title:hover { background:#09B0B7; }
.turqoise-accordion-theme .accordion-toggle:checked + .accordion-title{ background:#0799A0; }
.turqoise-accordion-theme ul .accordion-toggle:checked + .accordion-title{ background:#09B0B7; }
.turqoise-accordion-theme ul ul .accordion-toggle:checked + .accordion-title{ background:#0BC5CE; }
.turqoise-accordion-theme .mdn-container a,
.turqoise-accordion-theme .mdn-container h1,
.turqoise-accordion-theme .mdn-container h3{ color:#28C0C6; }



/* @responsive video 
----------------------------------------------- */
.mdn-accordion .mdn-video-wrapper{ 
	width:100%; 
	margin:20px 0 10px 0;
	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2); 
}

.mdn-accordion .mdn-video{ 
    float: none;
    clear: both;
    width: 100%;
    position: relative;
    padding-bottom: 56.25%;
	  padding-top: 25px;
    height: 0;	 
}

.mdn-accordion .mdn-video iframe,
.mdn-accordion .mdn-video object,
.mdn-accordion .mdn-video embed, 
.mdn-accordion .mdn-video video {
	position: absolute;
	width: 100%!important;
	height: 100%!important;    
	left: 0;
	top: 0;
}

.accordion-dark .mdn-video-wrapper{ 
	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 1);
	-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 1);
	box-shadow: 0 1px 10px rgba(0, 0, 0, 1);
}

/* @body background style 
----------------------------------------------- */
.custom-bg{ background:#EAF0F2/*#F3F5F6#EDF1F2*/; }

/* @responsive styles
----------------------------------------------- */
@media only screen and (min-width: 600px) {
	.mdn-accordion a,
	.mdn-accordion .accordion-title{ 
		/* padding:24px;  */
		font-size:16px;  
	}
}

#drop-content {
    display: none;
  }

  /* Show the drop-content when the 'show' class is present */
  #drop-content.show {
    display: flex;
	width: 10px!important;
  }


  
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg head">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Weddingtips</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="investors.php">Investors</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle drophead" id="dropitem"  onclick="toggleDropdown()">
              Vendors
            </a>
            <ul class="mdn-accordion indigo-accordion-theme dropdown-menu d-lfex" id="drop-content">
                <!-- <li class="sub-level">
                    <input class="accordion-toggle" type="checkbox" name ="group-1" id="group-1">
                    <label class="accordion-title" for="group-1"> Makeup Artists </label>
                    <ul>
                        <li class="sub-level">
                            <input class="accordion-toggle" type="checkbox" name ="sub-group-1" id="sub-group-1">
                            <label class="accordion-title" for="sub-group-1">Sub Menu 1</label>
                            <ul>
                                <li><a href="#"><i class="fa fa-file-excel-o"></i> Excel Document</a></li>
                                <li><a href="#"><i class="fa fa-file-word-o"></i> Word Document</a></li>
                                <li><a href="#"><i class="fa fa-file"></i> Text Document</a></li>
                                <li><a href="#"><i class="fa fa-file-pdf-o"></i> PDF Document</a></li>
                            </ul>
                        </li>
                        
                        <li class="sub-level">
                            <input class="accordion-toggle" type="checkbox" name ="sub-group-2" id="sub-group-2">
                            <label class="accordion-title" for="sub-group-2">Sub Menu 2</label>
                            <ul>
                                <li class="sub-level">
                                    <input class="accordion-toggle" type="checkbox" name ="sub-group-level-3" id="sub-group-level-3">
                                    <label class="accordion-title" for="sub-group-level-3">Sub Sub Menu 1 </label>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-file-excel-o"></i> Excel Document</a></li>
                                        <li><a href="#"><i class="fa fa-file-word-o"></i> Word Document</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> Text Document</a></li>
                                        <li><a href="#"><i class="fa fa-file-pdf-o"></i> PDF Document</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sub Sub Menu 2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Sub Menu 3</a></li>
                        <li><a href="#">Sub Menu 4</a></li>
                    </ul>
                </li>
                
                <li class="sub-level">
                    <input class="accordion-toggle" type="checkbox" name ="group-2" id="group-2">
                    <label class="accordion-title" for="group-2"><i class="fa fa-camera-retro"></i> Photography </label>
                    <ul>
                        <li><a href="#"><i class="fa fa-file-excel-o"></i> Excel Document</a></li>
                        <li><a href="#"><i class="fa fa-file-word-o"></i> Word Document</a></li>
                        <li><a href="#"><i class="fa fa-file"></i> Text Document</a></li>
                        <li><a href="#"><i class="fa fa-file-pdf-o"></i> PDF Document</a></li>
                    </ul>
                </li> -->
				<div class="cate-type">
					<li><a href="#"></i> Makeup Artists </a></li>
					<li><a href="#"></i> Photographer </a></li>
					<li><a href="#"></i> Mehandi Artists </a></li>
					<li><a href="#"></i> Jewellery </a></li>
					<li><a href="#"></i> Wedding Wear </a></li>
				</div>
				<div class="cate-type">
					<li><a href="#"></i> Venues </a></li>
					<li><a href="#"></i> Catering </a></li>
					<li><a href="#"></i> Decoration </a></li>
					<li><a href="#"></i> Honeymoon </a></li>
					<li><a href="#"></i> Invitation </a></li>
				</div>
                
                
            </ul>
            
          </li>
        </ul>
        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
        <div class="rigt d-flex">
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              All cites
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
          <!-- <div class="nav-item">
            <button type="button" class="btn btn-outline-primary"><a href="login.php" >Login</a></button>

			<i class="fa-solid fa-user"></i><i class="fa-solid fa-caret-down"></i>
          </div> -->
		  <div class="nav-item">
				<?php if(isset($_SESSION['vemail'])) { ?>
					<!-- If the session variable 'vemail' is set (user is logged in), display the logout button -->
					<button type="button" class="btn btn-outline-primary"><a href="logout.php">Logout</a></button>&nbsp;&nbsp;
				<?php } else { ?>
					<!-- If the session variable 'vemail' is not set (user is not logged in), display the login button -->
					<button type="button" class="btn btn-outline-primary"><a href="login.php">Login</a></button>&nbsp;&nbsp;
				<?php } ?>
			</div>

        </div>
        
      </div>
    </div>
  </nav>

  





<!-- dropdown item script code -->

<script src="https://use.fontawesome.com/62f6fd10b0.js"></script>
  <script
src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
crossorigin="anonymous"></script>
  

   <script>
    jQuery(document).ready(function(){
	var modernAccordion = $('.mdn-accordion');
	if( modernAccordion.length > 0 ) {
		modernAccordion.each(function(){
			var each_accordion = $(this);
			$('.accordion-toggle:checked').siblings('ul').attr('style', 'display:none;').stop(true,true).slideDown(300);
			each_accordion.on('change', '.accordion-toggle', function(){
				var toggleAccordion = $(this);
				if (toggleAccordion.is(":radio")) {
					toggleAccordion.closest('.mdn-accordion').find('input[name="' + $(this).attr('name') + '"]').siblings('ul')
					.attr('style', 'display:block;').stop(true,true).slideUp(300); 
					toggleAccordion.siblings('ul').attr('style', 'display:none;').stop(true,true).slideDown(300);									
			   } else {				
					(toggleAccordion.prop('checked')) ? toggleAccordion.siblings('ul')
					.attr('style', 'display:none;').stop(true,true).slideDown(300) : toggleAccordion.siblings('ul')
					.attr('style', 'display:block;').stop(true,true).slideUp(300); 
			   }
			});
		});
	}
	$(document).on('click', '.mdn-accordion .accordion-title', function(e) {
		var $mdnRippleElement = $('<span class="mdn-accordion-ripple" />'),
		$mdnButtonElement = $(this),
		mdnBtnOffset = $mdnButtonElement.offset(),
		mdnXPos = e.pageX - mdnBtnOffset.left,
		mdnYPos = e.pageY - mdnBtnOffset.top,
		mdnSize = parseInt(Math.min($mdnButtonElement.height(), $mdnButtonElement.width()) * 0.5),
		mdnAnimateSize = parseInt(Math.max($mdnButtonElement.width(), $mdnButtonElement.height()) * Math.PI);
		$mdnRippleElement
		.css({
			top: mdnYPos,
			left: mdnXPos,
			width: mdnSize,
			height: mdnSize,
			backgroundColor: $mdnButtonElement.data("accordion-ripple-color")
		})
		.appendTo($mdnButtonElement)
		.animate({
			width: mdnAnimateSize,
			height: mdnAnimateSize,
			opacity: 0
		}, 800, function() {
			$(this).remove();
		});
	});	
});



function toggleDropdown() {
    var dropContent = document.getElementById("drop-content");
    // Toggle the class that controls visibility
    dropContent.classList.toggle("show");
  }




   </script>


</body>
</html>