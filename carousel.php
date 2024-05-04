
	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />

    <style>
		.containers {
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto;
		}

		@media (min-width: 768px) {
			.containers {
				width: 750px;
			}
		}

		@media (min-width: 992px) {
			.containers {
				width: 970px;
			}
		}

		@media (min-width: 1200px) {
			.containers {
				width: 1170px;
			}
		}

        @media only screen and (min-width:320px) and (max-width:759px) {
            .containers {
				margin-top: 600px !important;
			}
        }




		@media (max-width: 767px) {
			#featureContainer .carousel-inner .carousel-item>div {
				display: none;
			}

			#featureContainer .carousel-inner .carousel-item>div:first-child {
				display: block;
			}
		}

		#featureContainer .carousel-inner .carousel-item.active,
		#featureContainer .carousel-inner .carousel-item-next,
		#featureContainer .carousel-inner .carousel-item-prev {
			display: flex;
		}

		/* medium and up screens */
		@media (min-width: 768px) {

			#featureContainer .carousel-inner .carousel-item-end.active,
			#featureContainer .carousel-inner .carousel-item-next {
				transform: translateX(25%);
			}

			#featureContainer .carousel-inner .carousel-item-start.active,
			#featureContainer .carousel-inner .carousel-item-prev {
				transform: translateX(-25%);
			}

			#featureContainer .card img {
				width: 90%;
				height: 40vh;
			}

			#featureContainer .carousel-item {
				justify-content: space-between;
			}
		}

		@media (max-width: 767px) {
			#featureContainer .card img {
				width: 100%;
				/* height: 400px; */
			}
		}

		#featureContainer .carousel-inner .carousel-item-end,
		#featureContainer .carousel-inner .carousel-item-start {
			transform: translateX(0);
		}

		#featureContainer .card {
			border: 0;
		}

		#featureContainer .card {
			position: relative;
		}

		#featureContainer .card .card-img-overlays {
			position: absolute;
			bottom: 15%;
			left: 10%;
		}

		#featureContainer a {
			text-decoration: none;
		}

		#featureContainer .indicator {
			border: 1px solid rgb(202, 202, 202);
			padding: 3px 6px 3px 6px;
		}

		#featureContainer .indicator:hover {
			background-color: blue;
			border: 1px solid blue;
			transition: 200ms;
		}

		#featureContainer .indicator:hover {
			color: white;
			transition: 200ms;
		}

		#featureContainer .indicator {
			color: lightgray;
		}

		#featureContainer .float-end {
			padding-top: 10px;
		}
	</style>


<div class="containers my-3 mt-5" id="featureContainer">
		<!-- <h1>Multi-item Carousel For Bootstrap 5 Example</h1>
		<p class="lead">Just another JavaScript & CSS extension to create a responsive and multi-item carousel using
			Bootstrap 5's carousel component.</p> -->
		<!-- <style>
			.download {
				padding: 1.25rem;
				border: 0;
				border-radius: 3px;
				background-color: #4F46E5;
				color: #fff;
				cursor: pointer;
				text-decoration: none;
			}

			.download:hover {
				color: #fff
			}

			#carbonads {
				display: block;
				overflow: hidden;
				max-width: 728px;
				position: relative;
				font-size: 22px;
				box-sizing: content-box
			}

			#carbonads>span {
				display: block
			}

			#carbonads a {
				color: #4F46E5;
				text-decoration: none
			}

			#carbonads a:hover {
				color: #4F46E5
			}

			.carbon-wrap {
				display: flex;
				align-items: center
			}

			.carbon-img {
				display: block;
				margin: 0;
				line-height: 1
			}

			.carbon-img img {
				display: block;
				height: 90px;
				width: auto
			}

			.carbon-text {
				display: block;
				padding: 0 1em;
				line-height: 1.35;
				text-align: left
			}

			.carbon-poweredby {
				display: block;
				position: absolute;
				bottom: 0;
				right: 0;
				padding: 6px 10px;
				text-align: center;
				text-transform: uppercase;
				letter-spacing: .5px;
				font-weight: 600;
				font-size: 8px;
				border-top-left-radius: 4px;
				line-height: 1;
				color: #aaa !important
			}

			@media only screen and (min-width:320px) and (max-width:759px) {
				.carbon-text {
					font-size: 14px
				}
			}
		</style> -->
		<!-- <div>
			<div id="carbon-block"></div>
			<script async
				src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2783044520727903"
				crossorigin="anonymous"></script>
			CSS_Replace_Demo
			<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2783044520727903"
				data-ad-slot="3576734658" data-ad-format="auto" data-full-width-responsive="true"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div> -->

		<div class="row mx-auto my-auto justify-content-center">
			<div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">
				<h2 class="font-weight-light float-start mt-5">Featured Carousel</h2>
				<div class="float-end pe-md-4">
					<a class="indicator" href="#featureCarousel" role="button" data-bs-slide="prev">
						<span class="fas fa-chevron-left" aria-hidden="true"></span>
					</a> &nbsp;&nbsp;
					<a class="w-aut indicator" href="#featureCarousel" role="button" data-bs-slide="next">
						<span class="fas fa-chevron-right" aria-hidden="true"></span>
					</a>
				</div>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="https://source.unsplash.com/EBtfyalTU50/333x500" class="img-fluid">
								</div>
								<div class="card-img-overlays">Slide 1</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="https://source.unsplash.com/aUQodNIZktU/333x500" class="img-fluid">
								</div>
								<div class="card-img-overlays">Slide 2</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="https://source.unsplash.com/2NQjEbfC-_Y/333x500" class="img-fluid">
								</div>
								<div class="card-img-overlays">Slide 3</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="https://source.unsplash.com/r13sao-Gmnc/333x500" class="img-fluid">
								</div>
								<div class="card-img-overlays">Slide 4</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="https://source.unsplash.com/tm9emr8U9-s/333x500" class="img-fluid">
								</div>
								<div class="card-img-overlays">Slide 5</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="https://source.unsplash.com/uM4lQmRieos/333x500" class="img-fluid">
								</div>
								<div class="card-img-overlays">Slide 6</div>
							</div>
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