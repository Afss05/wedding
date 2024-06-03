<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
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

                <p class="text-center">All Details Display</p>

        </div>
    </div>

</body>

</html>