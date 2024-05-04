
<?php 
	session_start();
	include("config.php");
	$error="";
	if(isset($_POST['login']))
	{
		$email=$_REQUEST['email'];
		$pass=$_REQUEST['password'];
		$pass= sha1($pass);
		
		if(!empty($email) && !empty($pass))
		{
			$query = "SELECT email, password FROM admin WHERE email='$email' AND password='$pass'";
			$result = mysqli_query($con,$query)or die(mysqli_error());
			$num_row = mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
			if( $num_row == 1 )
			{
				$_SESSION['email']=$email;
				header("Location: dashboard.php");
			}
			else
			{
				$error='* Invalid User Name and Password';
			}
		}else{
			$error="* Please Fill all the Fileds!";
		}
		
	}   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


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
    border-radius: 5px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.loginbox {
    display: flex;
    justify-content: center;
    align-items: center;
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
                            <h1>Admin Login Panel</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <p style="color:red;"><?php echo $error; ?></p>
                            <!-- Form -->
                            <form method="post">
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" placeholder="User email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
                                </div>
                            </form>
                            
                                                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>