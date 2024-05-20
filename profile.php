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


</head>

<body>

    <div class="page-wrapper">
        <div class="row">
            <?php include('include/header.php') ?>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="profile_body container">
                    <div class="pro_head">
                        <div class="col-lg-3 pro_head_line">
                            <a href="#infomation">Information</a>
                        </div>
                        <div class="col-lg-3 pro_head_line">
                            <a href="#product">Product</a>
                        </div>
                        <div class="col-lg-3 pro_head_line">
                            <a href="#gallery">Gallery</a>
                        </div>
                        <div class="col-lg-3 pro_head_line">
                            <a href="#sample">Sample</a>
                        </div>
                    </div>
                    <div class="pro_content">
                        <div class="pro_inform" id="infomation"> All Details Display</div>

                        <!-- product listed -->
                        <div class="pro_product" id="product">
                            <div class="pro_list">
                                <div class="pro_list_head d-flex justify-content-between">
                                    <h4>Listed Items</h4>
                                    <button type="button"><i class="fa-solid fa-folder-plus"></i></button>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Categary</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label="Product">Product 1</td>
                                            <td data-label="Category">Category 1</td>
                                            <td data-label="Update">-</td>
                                            <td data-label="Delete">-</td>
                                            <td data-label="Status">Active</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Product">Product 2</td>
                                            <td data-label="Category">Category 2</td>
                                            <td data-label="Update">-</td>
                                            <td data-label="Delete">-</td>
                                            <td data-label="Status">Inactive</td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                                  <form action="#" method="post">
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-store"></i></span>
                                        <input type="text" id="name" name="vname" placeholder="Brand_Name">

                                    </div>
                                    <div class="form-group"> 
                                        <span><i class="fa-solid fa-layer-group"></i></span>
                                        <input type="email" id="email" name="vemail" placeholder="Brand_Type">

                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-key"></i></span>
                                        <input type="password" id="password" name="vpassword"
                                            placeholder="Choose a Password">

                                    </div>
                                    <div class="form-group">
                                        <span><i class="fa-solid fa-square-phone"></i></span>
                                        <input type="tel" id="contact" name="vcontact"
                                            placeholder="Your Contact Number">

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="regist">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="pro_gallery" id="#gallery">gfgcbgcygcigcbtvcK</div> -->
                        <!-- <div class="pro_sample" id="#sample">gfcjycfbgcyudgfccf</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>