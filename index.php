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
    <title>Document</title>
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

    <?php include('include/header.php') ?>


    <div class="overlay-black w-100 slider-banner1 position-relative"
        style="background-image: url('./images/bgimg/pic_2.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; height: 500px;">
        <div class="container h-100">
            <div class="row h-100 align-items-center seaform">
                <div class="col-lg-12">
                    <div class="text-white ">
                        <h3 class="mb-4 " style="">
                            Creating Your Special Day, Your Style</h3>
                        <!-- <form method="post" action="propertydetail.php"> -->
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control " name="type" required>
                                            <option value="" class="disable">All Categories</option>
                                            <option value="mackupart">Mackup_Art</option>
                                            <option value="photographers">Photographers</option>
                                            <option value="venues">Venues</option>
                                            <option value="mehndiart">Mehndi_Art</option>
                                            <option value="jewellery">Jewellery</option>
                                            <option value="weddingwear">Wedding_Wear</option>
                                            <option value="weddingphoto">Wedding_Photo</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="stype" required>
                                                <option value="">Types</option>
                                                <option value="rent">Rent</option>
                                                <option value="sale">Buy / Selling</option>
                                                <option value="commercial">Commercial</option>
                                            </select>
                                        </div>
                                    </div> -->
                                <div class="col-md-6 col-lg-2">
                                    <div class="form-group ">
                                        <input type="text" class="form-control " name="location"
                                            placeholder="Enter Location" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <div class="form-group">
                                        <button type="submit" name="filter"
                                            class="btn btn-primary w-100 p-2">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="sec_section mt-4">
        <div class="container ">
            <h3>Top Vendors</h3>
            <div class="col-lg-12 mt-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="top_ven">
                            <img src="./images/bgimg/pic_4.jpg" alt="" srcset="" width="100%" height="200px">
                            <P>Sample text</P>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top_ven">
                            <img src="./images/bgimg/pic_4.jpg" alt="" srcset="" width="100%" height="200px">
                            <P>Sample text</P>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top_ven">
                            <img src="./images/bgimg/pic_4.jpg" alt="" srcset="" width="100%" height="200px">
                            <P>Sample text</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  <div class="slider">
        <!-- <?php include('carousel.phap')?> -->

        <div class="containers my-3 mt-5" id="featureContainer">
		<div class="row mx-auto my-auto justify-content-center">
			<div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">
				<h2 style="font-family: Georgia, 'Times New Roman', Times, serif; font-style: italic;" class="font-weight-light float-start mt-5">Featured Vendors</h2>
				<div class="float-end pe-md-4">
					<a class="indicator left" href="#featureCarousel" role="button" data-bs-slide="prev">
						<span class="fas fa-chevron-left" aria-hidden="true"></span>
					</a> &nbsp;&nbsp;
					<a class="w-aut indicator" href="#featureCarousel" role="button" data-bs-slide="next">
						<span class="fas fa-chevron-right" aria-hidden="true"></span>
					</a>
				</div>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="col-md-3">
							<a href="#">
								<div class="card">
									<div class="card-img">
										<img src="./images/vendors/catering.jpg" class="img-fluid">
									</div>
									<div class="card-img-overlays">Catering</div>
								</div>
							</a>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<a href="#">
								<div class="card">
									<div class="card-img">
										<img src="./images/vendors/Decoration.jpg" class="img-fluid">
									</div>
									<div class="card-img-overlays">Decoration</div>
								</div>
							</a>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<a href="#">
								<div class="card">
									<div class="card-img">
										<img src="./images/vendors/jellery.jpg" class="img-fluid">
									</div>
									<div class="card-img-overlays">Jewellery</div>
								</div>
							</a>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<a href="#">
								<div class="card">
									<div class="card-img">
										<img src="./images/vendors/mackup_arties.jpg" class="img-fluid">
									</div>
									<div class="card-img-overlays">Mackup_Art</div>
								</div>
							</a>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<a href="#">
								<div class="card">
									<div class="card-img">
										<img src="./images/vendors/mehndi.jpg" class="img-fluid">
									</div>
									<div class="card-img-overlays">Mehendi</div>
								</div>
							</a>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<a href="photo_view.php">
								<div class="card">
									<div class="card-img">
										<img src="./images/vendors/photographer.jpg" class="img-fluid">
									</div>
									<div class="card-img-overlays">Wedding_Photo</div>
								</div>
							</a>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<a href="#">
								<div class="card">
									<div class="card-img">
										<img src="./images/vendors/venues.jpg" class="img-fluid">
									</div>
									<div class="card-img-overlays">Venues</div>
								</div>
							</a>		
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<a href="#">
								<div class="card">
									<div class="card-img">
										<img src="./images/vendors/wear.jpg" class="img-fluid">
									</div>
									<div class="card-img-overlays">Wedding_Wear</div>
								</div>
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
		</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
		integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
		</script>
	<script>
		let myCarousel = document.querySelectorAll('#featureContainer .carousel .carousel-item');
		myCarousel.forEach((el) => {
			const minPerSlide = 4
			let next = el.nextElementSibling
			for (var i = 1; i < minPerSlide; i++) {
				if (!next) {
					// wrap carousel by using first child
					next = myCarousel[0]
				}
				let cloneChild = next.cloneNode(true)
				el.appendChild(cloneChild.children[0])
				next = next.nextElementSibling
			}
		})

	</script>

  </div>   

    <script src="./assets/js/script.js"></script>



</body>

</html>