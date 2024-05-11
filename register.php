
<?php
// Include database configuration
include 'config.php';

// Initialize error and message variables
$error = "";
$msg = "";

// Function to validate password
function validatePassword($password) {
    // Check for minimum length
    if (strlen($password) < 6) {
        return false;
    }

    // Check for at least one uppercase letter
    if (!preg_match('/[A-Z]/', $password)) {
        return false;
    }

    // Check for at least one lowercase letter
    if (!preg_match('/[a-z]/', $password)) {
        return false;
    }

    // Check for at least one digit
    if (!preg_match('/\d/', $password)) {
        return false;
    }

    // Check for at least one special character
    if (!preg_match('/[^a-zA-Z\d]/', $password)) {
        return false;
    }

    // Password meets all criteria
    return true;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['vname'];
    $email = $_POST['vemail'];
    $password = $_POST['vpassword'];
    $contact = $_POST['vcontact'];

    // Check if any field is empty
    if (empty($name) || empty($email) || empty($password) || empty($contact)) {
        $error = "All fields are required";
    } else {
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format";
        } else {
            // Validate password
            if (!validatePassword($password)) {
                $error = "Password does not meet the criteria(Asd@12)";
            } else {
                // Check if email already exists
                $check_query = "SELECT * FROM vendor WHERE vemail=?";
                $stmt = $conn->prepare($check_query);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result->num_rows > 0) {
                    $error = "Email already exists";
                } else {
                    // Insert data into database
                    $insert_query = "INSERT INTO vendor (vname, vemail, vpassword, vcontact) VALUES (?, ?, ?, ?)";
                    $stmt = $conn->prepare($insert_query);
                    $stmt->bind_param("ssss", $name, $email, $password, $contact);
                    if ($stmt->execute()) {
                        $msg = "Registration successful";
                        // Redirect to profile page
                        header("Location: profile.php");
                        exit(); // Ensure script execution stops after redirection
                    } else {
                        $error = "Error: " . $stmt->error;
                    }
                }
            }
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
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: auto;
            /* padding: 30px; */
            border: 1px solid #ffffff; /* white border */
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.5); /* white background with transparency */
            box-shadow: 0 0 10px rgba(255, 255, 255, 1); /* white shadow with transparency */
            display: flex;
        }

        .container h2 {
            text-align: center;
            color: black; 
            padding-bottom: 10px;
            padding-top: 30px;
        }

        .form-group {
            margin-bottom: 5px;
        }

        .form-group input {
            width: 80%;
            padding: 10px;
            border: 1px solid rgb(68, 67, 67, 05); /* white border */
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.7); /* white background with transparency */
        }

        .form-group button {
            width: 80%;
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
            text-align: left !important;
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

        .form-group p {
            margin: 0px;
            text-align: start;
        }
        .form-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-group input[type="email"],
        input[type="text"],
        input[type="tel"],
        input[type="password"] {
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
            .form-group {
                position: relative;
                margin-bottom: 1rem;
            }

            .form-group input[type="email"],
            input[type="text"],
            input[type="tel"],
            input[type="password"] {
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
        }
  
    
    </style>

</head>
<body>
<!-- <div class="rigt" style="width: 100%;"> -->
<!-- <div class="row"> -->
    <!-- <div class="col-lg-12"> -->
    <?php include('include/header.php') ?>

    <div class="log-page" style="background: url('./images/bgimg/log_img.jpg'); background-size: cover; width: 100%; background-repeat: no-repeat; height: 600px;">
        <div class="container">
            <div class="right_img mt-5">
                <img src="./images/bgimg/log_pic.png" alt="" style="width: auto; height: 400px;">
            </div>
            <div class="form_left mt-5">
                <h2> NEW MEMBER REGISTRATION</h2>
                <p style="color:green;"><?php echo $msg; ?></p>
                <p style="color:red;"><?php echo $error; ?></p>
                <form id="registrationForm" method="post" >
                    <div class="form-group">
                        <span><i class="fa-solid fa-user"></i></span>
                        <input type="text" id="name" name="vname" placeholder="Your Name" >
                        
                    </div>
                    <div class="form-group">
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" id="email" name="vemail" placeholder="Your Email" >
                        
                    </div>
                    <div class="form-group">
                        <span><i class="fa-solid fa-key"></i></span>
                        <input type="password" id="password" name="vpassword" placeholder="Choose a Password" >
                        
                    </div>
                    <div class="form-group">
                        <span><i class="fa-solid fa-square-phone"></i></span>
                        <input type="tel" id="contact" name="vcontact" placeholder="Your Contact Number" >
                        
                    </div>
                    <div class="form-group">
                        <button type="submit" name="regist">Register</button>
                    </div>
                    <p style="text-align: center;">Already have an account? <a href="login.php">Login</a></p> <!-- Adjust the href attribute accordingly -->
                </form>
            </div>
        </div>
    </div>

    
    



    
</body>
</html>