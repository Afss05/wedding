<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

// if(!isset($_SESSION['vemail']))
// {
// 	// header("location:profile.php");
// }

if (["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) 
// if(isset($_POST['add']))
 {
    $brandName = $_POST['brandName'];
    $category = $_POST['category'];
    $contactPerson = $_POST['contactPerson'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
	$vid=$_SESSION['vid'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $yearsInBusiness = $_POST['yearsInBusiness'];

    // Handle file upload
    $logo = $_FILES['logo']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($logo);
    move_uploaded_file($_FILES['logo']['tmp_name'], $target_file);

    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $youtube = $_POST['youtube'];
    $website = $_POST['website'];

    $sql = "INSERT INTO vr_details (brandName, category, contactPerson, phoneNumber, email, vid, address, description, yearsInBusiness, logo, facebook, instagram, youtube, website)
    VALUES ('$brandName', '$category', '$contactPerson', '$phoneNumber', '$email', '$vid', '$address', '$description', '$yearsInBusiness', '$logo', '$facebook', '$instagram', '$youtube', '$website')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
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

    <style>
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555555;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            color: #333333;
        }

        .form-group input[type="file"] {
            padding: 5px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .social-media-links {
            display: flex;
            justify-content: space-between;
        }

        .social-media-links .form-group {
            flex: 1;
            margin-right: 10px;
        }

        .social-media-links .form-group:last-child {
            margin-right: 0;
        }

        .result-container {
            /* display: none; */
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

        /* Style the labels (strong elements) */
        .result-container p strong {
            display: inline-block;
        }

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

            <div class="container">
                <div class="form-container">
                    <h2>Business Information Form</h2>
                    <form id="businessForm" method="post" enctype="multipart/form-data">
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

            <div class="container">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="result-container" id="resultContainer">
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
                
            </div>
            
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

</body>

</html>