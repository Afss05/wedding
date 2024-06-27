<?php 
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");

if (!isset($_SESSION['vemail'])) {
    header("location:login.php");
    exit();
}

$error = "";
$msg = "";
if(isset($_POST['add']))
{
	
	$price=$_POST['price'];
    // echo "$price";

	$vid=$_SESSION['vid'];

	$image=$_FILES['image']['name'];

	
	$temp_name  =$_FILES['image']['tmp_name'];
	
	move_uploaded_file($temp_name,"uploads/$image");

    // echo "$image";

	
	$sql="insert into product (price,image, vid)
	values('$price','$image','$vid')";
	$result=mysqli_query($con,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>Property Inserted Successfully</p>";
					
		}
		else
		{
			$error="<p class='alert alert-warning'>Property Not Inserted Some Error</p>";
		}
        header("Location: product.php?msg=$msg&error=$error");
        exit();
}	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <!-- Bootstrap CSS v5.2.1  carousel -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />

    <link rel="stylesheet" href="./assets/css/style.css">

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


/* form code */

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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse user-data" id="navbarNav">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="profile.php">Information</a>
                                </li>
                                <li class="nav-item active">
                                <a class="nav-link" href="product.php">Product</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="gallery.php">Gallery</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Sample</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- body content -->

                <?php 
                $vid=$_SESSION['vid'];
                // $query=mysqli_query($con,"SELECT * FROM `vr_details` WHERE vid='$vid'");
                $query=mysqli_query($con,"SELECT * FROM `new` WHERE vid='$vid'");
                    while($row=mysqli_fetch_array($query))
                    {
                ?>

                <div class="result_container">
                    <div class="col-lg-12">
                        <div class="container">
                            <div class="row">
                                <div class="main-content">
                                    <h2>List Packages</h2>
                                    <span><button id="openPopup" class="add btn-primary text-center"> Add </button></span>
                                    <!-- <span><button id="openPopup" class="btn btn-primary"> Add <i class="fa-solid fa-folder-plus"></i></button></span> -->
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="container">
                                            <table  class="items-list col-lg-12 table-hover" style="border-collapse:inherit;">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Price</th>
                                                        <th>Update</th>
                                                        <th>Delete</th>


                                                    </tr>
                                                </thead>
                                                <!-- <?php echo $row['logo'];?>" -->
                                               <img src="uploads/<?php echo $row['logo'];?>" alt="image" height="250px" width="350px"> 
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>


    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" id="closePopup">&times;</span>
            <!-- <p>This is a popup message.</p> -->
            <div class="container">
                <div class="form-container">
                    <h2>Business Information Form</h2>
                    <form id="businessForm" method="post" onsubmit="handleSubmit(event)" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="brandName">BrandName:</label>
                            <input type="text" id="brandName" name="brandName" value="<?php echo $row['brandName'];?>"  disabled>
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" id="file" name="image" >
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" id="price" name="price" >
                        </div>
                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" id="address" name="address" value="<?php echo $row['address'];?>"  disabled>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="add">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


  

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