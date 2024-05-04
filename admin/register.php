

<?php 
include("config.php");
$error="";
$msg="";

$error_name = $error_email = $error_password = $error_phone = ""; // Define separate error variables for each field
if(isset($_POST['insert'])) { // Check if form is submitted via POST method
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];
    $pass= sha1($pass);


    if (empty($name)) {
        $error_name = '* Name is required';
    }

    // Validation for Email
    if (empty($email)) {
        $error_email = '* Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_email = '* Invalid email format';
    }

    // Validation for Password
    if (empty($pass)) {
        $error_password = '* Password is required';
    } elseif (strlen($pass) < 6) {
        $error_password = '* Password must be at least 6 characters';
    }

    // Validation for Phone (optional, as it's not marked as required in the HTML)
    if (empty($phone)) {
        $error_phone = '* phone is required';
    } elseif (!empty($phone) && !preg_match('/^\d{10}$/', $phone)) {
        $error_phone = '* Invalid phone number';
    }

	
	// Proceed with inserting into database if there are no errors
    if (empty($error_name) && empty($error_email) && empty($error_password) && empty($error_phone)) {
        // Insert into database
	{
		$sql="insert into admin (name,email,password,phone) values ('$name','$email','$pass','$phone')";
		$result=mysqli_query($con,$sql);
		if($result)
			{
				$msg='Admin Register Successfully';
				
						
			}
			else
			{
				$error='* Not Register Admin Try Again';
			}
	}
}
	
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <style>
    .page-wrappers {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f9f9f9;
}

.login-wrapper {
    width: 100%;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.loginbox {
    display: flex;
    justify-content: center;
    /* align-items: center; */
    padding: 20px;
    flex-direction: column;
}

.login-right-wrap {
    text-align: center;
}

.login-right-wrap h1 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #333;
}

.account-subtitle {
    color: #666;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.btn-primary {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.error-message {
    color: red;
    margin-top: 5px;
}

.success-message {
    color: green;
    margin-top: 5px;
}

.dont-have {
    margin-top: 20px;
    color: #666;
}

.form-group p {
    margin: 0px;
    text-align: start;
}


    </style>
</head>
<body>

        <div class="page-wrappers login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								<p style="color:green;"><?php echo $msg; ?></p>
								<!-- Form -->
								<!-- <form method="post">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Name" name="name">
								        <p style="color:red;"><?php echo $error_name; ?></p>
									</div>
									<div class="form-group">
										<input class="form-control" type="email" placeholder="Email" name="email">
								        <p style="color:red;"><?php echo $error_email; ?></p>
									</div>
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Password" name="password">
                                        <p style="color:red;"><?php echo $error_password; ?></p>
									</div>
									<div class="form-group">
										<input class="form-control" type="tel" placeholder="Phone" name="phone" maxlength="10">
								        <p style="color:red;"><?php echo $error_password; ?></p>
									</div>
									<div class="form-group mb-0">
										<input class="btn btn-primary btn-block" type="submit" name="insert" Value="Register">
									</div>
								</form> -->
                                <form method="post">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name" name="name">
                                        <!-- Display error message only if there's an error -->
                                        <?php if (!empty($error_name)): ?>
                                            <p style="color:red;"><?php echo $error_name; ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Email" name="email">
                                        <!-- Display error message only if there's an error -->
                                        <?php if (!empty($error_email)): ?>
                                            <p style="color:red;"><?php echo $error_email; ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Password" name="password">
                                        <!-- Display error message only if there's an error -->
                                        <?php if (!empty($error_password)): ?>
                                            <p style="color:red;"><?php echo $error_password; ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="tel" placeholder="Phone" name="phone" maxlength="10">
                                        <!-- Display error message only if there's an error -->
                                        <?php if (!empty($error_phone)): ?>
                                            <p style="color:red;"><?php echo $error_phone; ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input class="btn btn-primary btn-block" type="submit" name="insert" Value="Register">
                                    </div>
                                </form>

								<!-- /Form -->
								
				
								
								<div class="text-center dont-have">Already have an account? <a href="index.php">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    
</body>
</html>

