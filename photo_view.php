<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weddingtips_vendor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">

</head>
<body>
    <?php include('include/header.php') ?>
    
    <div class="overlay-black w-100 slider-banner1 position-relative"
        style="background-image: url('./images/bgimg/wedding_shoot.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; height: 400px;">

        <h3 class="ven_head">PhotoShoot</h3>

    </div>

    <div class="ids_vendor">
        <!-- <div class="full_row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-secondary double-down-line text-center mb-4">Recent Property</h2>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="featured-thumb hover-zoomer mb-4 vendor_img">
                            <div class="overlay-black overflow-hidden position-relative">
                                <img src="./images/bgimg/pic_2.jpg" alt="" srcset="" height="250px !important">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-secondary double-down-line text-center mb-4">Recent Property</h2>
                    </div>
                    <!--- <div class="col-md-6">
                        <ul class="nav property-btn float-right" id="pills-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Featured</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Top Sale</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab3" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Best Sale</a> </li>
                        </ul>
                    </div> --->
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
							                           
                                    <div class="col-md-6 col-lg-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <!-- <div class="overlay-black overflow-hidden position-relative"> <img src="./images/bgimg/pic_2.jpg" alt="pimage" height="250px !important"> -->
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="./uploads/<?php echo $row['image'];?> " alt="pimage" height="250px !important">
                                                <div class="featured bg-success text-white">New</div>
                                                <!-- <div class="sale bg-success text-white text-capitalize">For rend</div> -->
                                                <!-- <div class="price text-primary"><b>$<?php echo $row['13'];?> </b><span class="text-white"><?php echo $row['12'];?> Sqft</span></div> -->
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-3">
                                                    <!-- <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5> -->
                                                    <!-- <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i> </?php echo $row['14'];?></span> </div> -->
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <!-- <li><span><?php echo $row['12'];?></span> Sqft</li>
                                                        <li><span><?php echo $row['6'];?></span> Beds</li>
                                                        <li><span><?php echo $row['7'];?></span> Baths</li>
                                                        <li><span><?php echo $row['9'];?></span> Kitchen</li>
                                                        <li><span><?php echo $row['8'];?></span> Balcony</li> -->
                                                        
                                                    </ul>
                                                </div>
                                                <div class="p-4 d-inline-block w-100">
                                                    <!-- <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i>By : <?php echo $row['uname'];?></div> -->
                                                    <!-- <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i> <?php echo date('d-m-Y', strtotime($row['date']));?></div>  -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <h2>Enter Product Details</h2>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="productName">Product Name:</label><br>
        <input type="text" id="productName" name="productName" required><br><br>

        <label for="companyName">Company Name:</label><br>
        <input type="text" id="companyName" name="companyName" required><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" min="0" step="0.01" required><br><br>

        <label for="image">Product Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <input type="submit" value="Submit">
    </form>


    <?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "wed"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Proceed if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are filled
    if (isset($_POST["productName"]) && isset($_POST["companyName"]) && isset($_POST["price"]) && isset($_FILES["image"])) {
        // Process the form data
        $productName = $_POST["productName"];
        $companyName = $_POST["companyName"];
        $price = $_POST["price"];

        // Image handling
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            // Allow only certain file formats
            if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    // Insert data into database
                    $sql = "INSERT INTO products (productName, companyName, price, image)
                    VALUES ('$productName', '$companyName', '$price', '$targetFile')";

                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            }
        } else {
            echo "File is not an image.";
        }
    } else {
        echo "All fields are required.";
    }
}

// Close connection
$conn->close();
?>


<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "wed"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select all records from the products table
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Check if any records are returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<h2>Product Details:</h2>";
        echo "<p>ID: " . $row["id"] . "</p>";
        echo "<p>Product Name: " . $row["productName"] . "</p>";
        echo "<p>Company Name: " . $row["companyName"] . "</p>";
        echo "<p>Price: $" . $row["price"] . "</p>";
        echo "<p>Image: <img src='" . $row["image"] . "' alt='Product Image' style='max-width: 200px;'></p>";
    }
} else {
    echo "No products found";
}

// Close connection
$conn->close();
?>

</body>
</html>