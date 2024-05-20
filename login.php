<?php
// Start the session
session_start();

// Include database configuration
include 'config.php';

// Initialize error variable
$error = "";

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['vemail'];
    $password = $_POST['vpassword'];

    // Validate email and password
    if (empty($email) || empty($password)) {
        $error = "Email and password are required";
    } else {
        // Check if the user exists in the database
        $check_query = "SELECT * FROM vendor WHERE vemail='$email' AND vpassword='$password' ";
        $stmt = $conn->prepare($check_query);
        // $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // User exists, verify password
            $user = $result->fetch_assoc();
                // Password is correct, set session variables and redirect to profile page
                $_SESSION['user_id'] = $user['vid']; // Assuming 'id' is the primary key of the user
                $_SESSION['user_email'] = $user['vemail'];
                header("Location: profile.php");
                exit();
            } else {
                // Password is incorrect
                $error = "Incorrect password";
            }
        }    
    }

// Close database connection
$conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- boostrap link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

        <!-- icon link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
            /* login page style */

        .log-page {
            background: url('./images/bgimg/log_img.jpg');
            background-size: cover;
            width: 100%;
            background-repeat: no-repeat;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: auto;
            padding: 30px;
            border: 1px solid #ffffff; /* white border */
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.3); /* white background with transparency */
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); /* white shadow with transparency */
            display: flex;
        }

        .container h2 {
            text-align: center;
            color: black; /* white text */
            padding-bottom: 10px;
            padding-top: 30px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            /* border: 1px solid rgb(68, 67, 67, 05); white border */
            border: none; /* white border */
            border-radius: 0px;
            background-color: rgba(255, 255, 255, 0.7); /* white background with transparency */
        }

        input[type="password"]:focus,
            input[type="email"]:focus {
            border-bottom: #333;
            outline: none;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #ffffff; /* white background */
            color: #000000; /* black text */
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #f0f0f0; /* light gray on hover */
        }

        /* Additional CSS for the <p> tag */
        form p {
            text-align: center;
            margin-top: 10px;
            font-weight: 800px;
            color: black; /* white text */
        }

        form p a {
            color: yellow; /* white text */
            text-decoration: none;
        }

        form p a:hover {
            text-decoration: underline; /* underline on hover */
        }
        
        .form_left{
            margin-top: 40px;
        }

        @media screen and (min-width: 320px) and (max-width: 425px) {
            .right_img {
                display: none;
            }
            .container {
            width: auto;
            padding: 30px;
            border: 1px solid #ffffff; /* white border */
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.3); /* white background with transparency */
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); /* white shadow with transparency */
            /* display: flex; */
            }

            .container h2 {
                text-align: center;
                color: black; /* white text */
                padding-bottom: 10px;
                padding-top: 0px !important;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .form-group input {
                width: 100%;
                padding: 10px;
                border: 1px solid rgb(68, 67, 67, 05); /* white border */
                border-radius: 10px;
                background-color: rgba(255, 255, 255, 0.7); /* white background with transparency */
            }

            .form-group button {
                width: 100%;
                padding: 10px;
                border: none;
                border-radius: 10px;
                background-color: #ffffff; /* white background */
                color: #000000; /* black text */
                cursor: pointer;
            }

            .form-group button:hover {
                background-color: #f0f0f0; /* light gray on hover */
            }

            /* Additional CSS for the <p> tag */
            form p {
                text-align: center;
                margin-top: 10px;
                font-weight: 800px;
                color: black; /* white text */
            }

            form p a {
                color: yellow; /* white text */
                text-decoration: none;
            }

            form p a:hover {
                text-decoration: underline; /* underline on hover */
            }
            
            .form_left{
                margin-top: 10px;
            }
           
        }
        .form-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-group input[type="email"],input[type="password"] {
            padding-left: 2.5rem; /* Adjust as needed to accommodate the icon */
        }

        .form-group span {
            position: absolute;
            left: 0.75rem; /* Adjust the position of the icon */
            top: 50%;
            transform: translateY(-50%);
        }

        /* Adjust the icon size and color */
        .form-group span i {
            font-size: 1.25rem;
            color: #888; /* Adjust the color as desired */
        }
  
    </style>

</head>
<body>

    <?php include('include/header.php') ?>

    <div class="log-page" style="background: url('./images/bgimg/log_img.jpg'); background-size: cover; width: 100%; background-repeat: no-repeat; height: 600px;">
        <div class="container">
            <div class="right_img">
                <img src="./images/bgimg/log_pic.png" alt="" style="width: auto; height: 400px;">
            </div>
            <div class="form_left ">
                <h2> EXISTING MEMBER</h2>
                <!-- <p style="color:green;"><?php echo $msg; ?></p> -->
                <p style="color:red;"><?php echo $error; ?></p>
                <form method="post">
                    <div class="form-group">
                        <span><i class="fa-regular fa-user"></i></span>
                        <input type="email" id="email" name="vemail" placeholder="User email" >
                    </div>
                    <div class="form-group">
                        <span><i class="fa-solid fa-key"></i></span>
                        <input type="password" id="password" name="vpassword" placeholder="User password" >
                    </div>
                    <div class="form-group">
                        <button type="submit" name="login" value="Login">Login</button>
                    </div>
                    <p style="text-align: center;">Don't have an account? <a href="register.php">Sign Up</a></p> <!-- Adjust the href attribute accordingly -->
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>


