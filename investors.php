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
    <style>
        .top_menu {
            margin-top: 20px;
            display: flex;
            align-item: center;
            justify-content: center;
            height: 350px;
            border-radius: 20px;
            padding: 5px;
        }
        .owner_name p{
            font-size: 18px;
            font-family: Arial, Verdana, Geneva, Helvetica, sans-serif;
        }
        .thank_content p {
            font-size: 18px;
            font-weight:500;
            text-align: justify;
            font-style: italic;
            font-family: Arial, Verdana, Geneva, Helvetica, sans-serif;
        }

        .pdf_menu {
            display: flex;
            align-item: center;
            justify-content: center;
            margin-top: 10px;
        }

        .pdf_menu a{
            border: 1px solid grey;
            padding: 20px;
            font-size: 18px;
            border-radius: 20px;
            text-decoration: none;
            color: black;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        /* Responsive styles */
        @media (max-width: 768px) {
            .top_menu {
                height: 300px;
            }
            .container h4 {
                font-size: 20px !important;
            }
            .pdf_menu a{
                border: 1px solid grey;
                padding: 5px;
                font-size: 15px;
                border-radius: 20px;
            }
        }
    </style>
</head>

<body>


    <div class="page-wrapper">
        <div class="row">
            <?php include('include/header.php') ?>
        </div>

        <div class="container">
            <div class="row">
                <div class="top_menu">
					<img class="rounded" src="./images/ravi.jpg" alt="" srcset="" style="box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.5);">
				</div> 
				<h4 class="text-center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-style: italic;"><strong>CHAIRMAN & MANAGING DIRECTOR</strong></h4>

                <div class="col-lg-12 ">
                    <div class="container">
                        <div class="row">
                            <div class="owner_name">
                                <p class="text-center">“ First I thank to Customers and Partners for their continue support  our great journey ” </p>
                            </div>
                            <div class="thank_contents ">
                            </div><br>
                            <div class="thank_content">
                                <p>Our company is a pioneer in matchmaking, we have all kinds of profiles
                                    in All Communities and Regions.
                                    we as successfully completed 6 years, since we sustain in the market
                                    because we are good in customer satisfaction,  we also got good  ratings
                                    from most of the satisfied customers,
                                    our customer service takes personal care by the individual,
                                    our motive is to  satisfied the customer with the best life partner as per
                                    your requirement Bharatvivaha is Brand running the  all over india for online.</p>

                                    <p>Our brand value is high.
                                    Our focus All Region & Religion customers
                                    more then Registration
                                    Exclusive offer will be promoted to thousand of customers in our database which will give you high chances to conversation
                                    Only place to get exclusive wedding leads.
                                    Which give to you potential customers
                                    First of all, we are the first to bring in a scratch card option in marriage industry because we have to give the customer better service so that we can bring in lakhs of customers and give them the best service.
                                    In this process for all over India.
                                </p>
                            </div>
                                
                        </div>
                    </div>
				</div>
            </div>

            <div class="pdf_menu">
				<a href="./images/Bharatvivaha Business Proposal.pdf">Bharatvivaha Business Proposal
				<img class="rounded" src="./images/pdf.png" alt="" srcset="" width="auto" height="50px"></a>
			</div> 
        </div>

    </div>

</body>
</html>