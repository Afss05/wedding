<?php

ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['vemail']))
{
	header("location:login.php");
}
//// code insert
//// add code
$error="";
$msg="";
// if (["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) 
if(isset($_POST['add']))
 {
    $brandName = $_POST['brandName'];
    $category = $_POST['category'];
    $contactPerson = $_POST['contactPerson'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $logo = $_POST['logo'];
    $description = $_POST['description'];
    $yearsInBusiness = $_POST['yearsInBusiness'];

	$vid=$_SESSION['vid'];

    // // Handle file upload
    // $logo = $_FILES['logo']['name'];

    // $temp_name  =$_FILES['logo']['tmp_name'];

	// move_uploaded_file($temp_name,"uploads/$aimage");


    // $target_dir = "uploads/$logo";
    // $target_file = $target_dir . basename($logo);
    // move_uploaded_file($_FILES['logo']['tmp_name'], $target_file);

    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $youtube = $_POST['youtube'];
    $website = $_POST['website'];

    // $sql = "INSERT INTO vr_details (brandName, category, contactPerson, phoneNumber, email, vid, address, description, yearsInBusiness, logo, facebook, instagram, youtube, website)
    // VALUES ('$brandName', '$category', '$contactPerson', '$phoneNumber', '$email', '$vid', '$address', '$description', '$yearsInBusiness', '$logo', '$facebook', '$instagram', '$youtube', '$website')";
    
    $sql = "UPDATE new
    SET brandName = '$brandName',
    category = '$category',
    contactPerson = '$contactPerson',
    phoneNumber = '$phoneNumber',
    email = '$email',
    address = '$address',
    description = '$description',
    yearsInBusiness = '$yearsInBusiness',
    logo = '$logo',
    facebook = '$facebook',
    instagram = '$instagram',
    youtube = '$youtube',
    website = '$website'
WHERE vid = '$vid' ";
    
    $result=mysqli_query($con,$sql);
    if($result)
        {
            $msg="<p class='alert alert-success'>Details Added Successfully</p>";
                    
        }
        else
        {
            $error="<p class='alert alert-warning'>Property Not Inserted Some Error</p>";
        }
        header("Location: profile.php");
        exit();
    }		



?>  



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


    <!-- Bootstrap CSS v5.2.1  carousel -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/fonts/FREEBSC_.ttf"> 

    <style>

        .form_body {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }     

        /* .container {
            max-width: 800px;
            width: 100%;
        } */

        .form-container {
            background-color: #f9f9f9;
            overflow: scroll;
            height: 100vh;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 50px;
            color: #333;
            font-family: "Freebooster script";
        }

        .row span buttonp {
            margin-right: 0px !important;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-group label {
            width: 150px;
            margin-right: 20px;
            text-align: right;
            color: #555;
        }

        .form-group input,
        .form-group textarea {
            width: calc(100% - 170px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
            transition: border-color 0.3s;
        } 

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #007BFF;
        }

        .form-group textarea {
            resize: vertical;
        }
  
        .social-media-links {
            margin-bottom: 20px;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Responsive Styles */ 
        @media (max-width: 768px) {
            .form-group {
                flex-direction: column;
                align-items: flex-start;
            }

            .form-group label {
                width: 100%;
                margin-right: 0;
                margin-bottom: 5px;
                text-align: left;
            }

            .form-group input,
            .form-group textarea {
                width: 100%;
            }
        }



        /* .result-container {
            display: none;
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .result-container h2 {
            text-align: center;
            font-size: 24px;
            color: #333333;
        }

        .result-container p {
            font-size: 16px;
            color: #333333;
        }

        Style the labels (strong elements)
        .result-container p strong {
            display: inline-block;
        } */

        /* nav {
            position: fixed !important;
        } */
        

    </style>

</head>

<body>

    <div class="page-wrapper">
        <div class="row">
            <?php include('include/header.php') ?>
        </div>

        <div class="body_content">
            <!-- <div class="container-fluid"> -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary sec_header">
                <div class="container-fluid">
                    <a class="navbar-brand" href="profile.php">BrandName</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav user-data">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="profile.php">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product.php">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sample</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- body content -->

            <!-- <p class="text-center">All Details Display</p>   -->
            <!-- <div class="form_body">
                <div class="container">
                    <div class="form-container">
                        <h2>Business Information Form</h2>
                        <form id="businessForm" method="post" enctype="multipart/form-data" onsubmit="handleSubmit(event)">
                            <div class="form-group">
                                <label for="brandName">Brand Name:</label>
                                <input type="text" id="brandName" name="brandName" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Category:</label>
                                <input type="text" id="category" name="category" required>
                            </div>
                            <div class="form-group">
                                <label for="contactPerson">Contact Person:</label>
                                <input type="text" id="contactPerson" name="contactPerson" required>
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number:</label>
                                <input type="tel" id="phoneNumber" name="phoneNumber" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" id="address" name="address" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea id="description" name="description" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="yearsInBusiness">Years in Business:</label>
                                <input type="number" id="yearsInBusiness" name="yearsInBusiness" required>
                            </div>
                            <div class="form-group">
                                <label for="logo">Logo:</label>
                                <input type="file" id="logo" name="logo" accept="image/*" required>
                            </div>
                            <div class="social-media-links">
                                <div class="form-group">
                                    <label for="facebook">Facebook Link:</label>
                                    <input type="url" id="facebook" name="facebook">
                                </div>
                                <div class="form-group">
                                    <label for="instagram">Instagram Link:</label>
                                    <input type="url" id="instagram" name="instagram">
                                </div>
                            </div>
                            <div class="social-media-links">
                                <div class="form-group">
                                    <label for="youtube">YouTube Link:</label>
                                    <input type="url" id="youtube" name="youtube">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website:</label>
                                    <input type="url" id="website" name="website">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="add">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->

            <div class="result_container">
                <div class="col-lg-12">
                    <div class="container">
                    <!-- <?php
                if (isset($_SESSION['msg'])) {
                    echo "<script>alert('".$_SESSION['msg']."');</script>";
                    unset($_SESSION['msg']);
                }
                if (isset($_SESSION['error'])) {
                    echo "<script>alert('".$_SESSION['error']."');</script>";
                    unset($_SESSION['error']);
                }
                ?>
                     -->
                        <div class="row">
                            <div class="main-content">
                                <h2>INFORMATION</h2>
                                <span><button id="openPopup" class="add btn-primary text-center"> Add </button></span>
                                <!-- <span><button id="openPopup" class="btn btn-primary"> Add <i class="fa-solid fa-folder-plus"></i></button></span> -->
                            </div>
                            <!-- <h2>INFORMATION</h2><span><button id="openPopup">Open Popup</button></span> -->
                            <div class="col-md-8 col-sm-12 ">
                                <div class="row  text-center">
                                    <div class="person_details">
                                        <?php 
                                            $vid=$_SESSION['vid'];
                                            // $query=mysqli_query($con,"SELECT * FROM `vr_details` WHERE vid='$vid'");
                                            $query=mysqli_query($con,"SELECT * FROM `new` WHERE vid='$vid'");
                                                while($row=mysqli_fetch_array($query))
                                                {
                                            ?>
                                            <div class="result-content">
                                                <h3><strong>Brand Name:</strong></h3>
                                                <p><span><?php echo $row['5'];?></span></p>
                                            </div>
                                            <div class="result-content">
                                                <h3><strong>Category:</strong></h3>
                                                <p><span><?php echo $row['1'];?></span></p>
                                            </div>
                                            <div class="result-content">
                                                <h3><strong>PhoneNumber:</strong></h3>
                                                <p><span><?php echo $row['1'];?></span></p>
                                            </div>
                                            <div class="result-content">
                                                <h3><strong>Email:</strong></h3>
                                                <p><span><?php echo $row['1'];?></span></p>
                                            </div>
                                            <div class="result-content">
                                                <h3><strong>Years of Business:</strong></h3>
                                                <p><span><?php echo $row['1'];?></span></p>
                                            </div>
                                            <div class="result-content">
                                                <h3><strong>InstagramId:</strong></h3>
                                                <p><span><?php echo $row['1'];?></span></p>
                                            </div>
                                            <div class="result-content">
                                                <h3><strong>FacebookProfile:</strong></h3>
                                                <p><span><?php echo $row['1'];?></span></p>
                                            </div>
                                            <div class="result-content">
                                                <h3><strong>YouTube:</strong></h3>
                                                <p><span><?php echo $row['1'];?></span></p>
                                            </div>
                                            <div class="result-content">
                                                <h3><strong>Website:</strong></h3>
                                                <p><span><?php echo $row['1'];?></span></p>
                                            </div>
                                            <div class="result-content">
                                                <h3><strong>Description:</strong></h3>
                                                <p><span><?php echo $row['1'];?></span></p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="ven_logo">
                                    <img src="<?php echo $row['13'];?>" alt="" height="250px" width="350px"> 
                                    <img src="./uploads/<?php echo $row['13'];?>" alt="" height="250px" width="350px"> 
                                </div>
                            </div> -->
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="container" id="resultContainer">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="result-container" >
                            <h2>Personal Details</h2>
                            <div class="result_content col-md-6">
                                <p class=""><strong>Brand Name:</strong> <span id="resultBrandName"></span></p>
                                <p><strong>Category:</strong> <span id="resultCategory"></span></p>
                            </div>
                            <div class="result_content col-md-6">
                                <p><strong>Contact Person:</strong> <span id="resultContactPerson"></span></p>
                                <p><strong>Phone Number:</strong> <span id="resultPhoneNumber"></span></p>
                            </div>
                            <div class="result_content">
                                <p><strong>Email:</strong> <span id="resultEmail"></span></p>
                                <p><strong>Address:</strong> <span id="resultAddress"></span></p>
                            </div>
                            <div class="result_content">
                                <p><strong>Des:</strong> <span id="resultFacebook"></span></p>
                                <p><strong>Years in Business:</strong> <span id="resultYearsInBusiness"></span></p>
                            </div>
                            <div class="result_content">
                                <p><strong>Facebook Link:</strong> <span id="resultFacebook"></span></p>
                                <p><strong>Instagram Link:</strong> <span id="resultInstagram"></span></p>
                            </div>
                            <div class="result_content">
                                <p><strong>YouTube Link:</strong> <span id="resultYouTube"></span></p>
                                <p><strong>Website:</strong> <span id="resultWebsite"></span></p>
                            </div>
                            <div class="result_content">
                                <p><strong>Description:</strong> <span id="resultDescription"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <!-- <script>
                document.getElementById('businessForm').addEventListener('submit', function (event) {
                    event.preventDefault();

                    // document.getElementById('resultBrandName').innerText = document.getElementById('brandName').value;
                    // document.getElementById('resultCategory').innerText = document.getElementById('category').value;
                    // document.getElementById('resultContactPerson').innerText = document.getElementById('contactPerson').value;
                    // document.getElementById('resultPhoneNumber').innerText = document.getElementById('phoneNumber').value;
                    // document.getElementById('resultEmail').innerText = document.getElementById('email').value;
                    // document.getElementById('resultAddress').innerText = document.getElementById('address').value;
                    // document.getElementById('resultDescription').innerText = document.getElementById('description').value;
                    // document.getElementById('resultYearsInBusiness').innerText = document.getElementById('yearsInBusiness').value;
                    // document.getElementById('resultFacebook').innerText = document.getElementById('facebook').value;
                    // document.getElementById('resultInstagram').innerText = document.getElementById('instagram').value;
                    // document.getElementById('resultYouTube').innerText = document.getElementById('youtube').value;
                    // document.getElementById('resultWebsite').innerText = document.getElementById('website').value;

                    document.querySelector('.form-container').style.display = 'none';
                    document.getElementById('resultContainer').style.display = 'block';
                });
            </script> -->

            
 
        </div>
    </div>

    
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" id="closePopup">&times;</span>
            <!-- <p>This is a popup message.</p> -->
            <div class="container">
                    <div class="form-container">
                        <h2>Business Information Form</h2>
                        <form id="businessForm" method="post" onsubmit="handleSubmit(event)">
                            <div class="form-group">
                                <label for="brandName">BrandName:</label>
                                <input type="text" id="brandName" name="brandName" value="a"  disable>
                            </div>
                            <div class="form-group">
                                <label for="category">Category:</label>
                                <input type="text" id="category" name="category" >
                            </div>
                            <div class="form-group">
                                <label for="contactPerson">Contact Person:</label>
                                <input type="text" id="contactPerson" name="contactPerson" >
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number:</label>
                                <input type="tel" id="phoneNumber" name="phoneNumber" >
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" >
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" id="address" name="address" >
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea id="description" name="description" rows="4" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="yearsInBusiness">Years in Business:</label>
                                <input type="number" id="yearsInBusiness" name="yearsInBusiness" >
                            </div>
                            <div class="form-group">
                                <label for="logo">Logo:</label>
                                <input type="file" id="logo" name="logo" multiple>
                            </div>
                            <div class="social-media-links">
                                <div class="form-group">
                                    <label for="facebook">Facebook Link:</label>
                                    <input type="url" id="facebook" name="facebook">
                                </div>
                                <div class="form-group">
                                    <label for="instagram">Instagram Link:</label>
                                    <input type="url" id="instagram" name="instagram">
                                </div>
                            </div>
                            <div class="social-media-links">
                                <div class="form-group">
                                    <label for="youtube">YouTube Link:</label>
                                    <input type="url" id="youtube" name="youtube">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website:</label>
                                    <input type="url" id="website" name="website">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="add">Submit</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>

    


    <style>

        /* .main-content {
            display: flex;
        } */

        .main-content span {
            padding: 10px;
            float: right;
            margin-top: -70px;
        }

        .main-content span button {
            border: none;
            background-color: white; 
        }

        .main-content span button i {
            color: blue;
            font-size: 30px;
        }

        .popup {
            display: none; /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px); /* Blurring the background */
            justify-content: center;
            align-items: center;
            z-index: 1000; /* Ensure it's on top */
        }

        .popup-content {
            background-color: #fff;
            margin-top: 50px;
            padding: 20px;
            border-radius: 10px;
            height: auto;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .add {
            color: white;
            padding: 5px 10px 5px 10px;
            background: blue !important;
            border-radius: 5px;
            border: 1px solid blue !important;
        }

    </style>


    <script>
        document.getElementById('openPopup').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'flex';
        });

        document.getElementById('closePopup').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        });

        window.addEventListener('click', function(event) {
        if (event.target == document.getElementById('popup')) {
            document.getElementById('popup').style.display = 'none';
        }
        });

    </script>

</body>

</html>