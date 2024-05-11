<?php 
session_start();
include("config.php");

$error="";
$msg="";

if(isset($_REQUEST['login'])) {
    $email = $_POST['vemail'];
    $password = $_POST['vpassword'];

    if(!empty($email) && !empty($password)) {
        // Use prepared statements to prevent SQL injection
        $stmt = $con->prepare("SELECT * FROM vendor WHERE vemail=? && vpassword=?     ");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Verify hashed password
            if(password_verify($password, $row['vpassword'])) {
                $_SESSION['vid'] = $row['vid'];
                $_SESSION['vemail'] = $email;
                header("location:index.php");
                exit;
            } else {
                $error = "<p class='alert alert-danger'>Invalid email or password!</p>";
            }
        } else {
            $error = "<p class='alert alert-danger'>Invalid email or password!</p>";
        }
    } else {
        $error = "<p class='alert alert-warning'>Please fill in all the fields.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        /* Login page style */
        .login-page {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 400px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .error-msg {
            color: red;
        }
    </style>
</head>
<body>
<div class="login-page">
    <div class="container">
        <h2 class="text-center mb-4">Login</h2>
        <form method="post">
            <div class="form-group">
                <input type="email" name="vemail" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="vpassword" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="error-msg"><?php echo $error; ?></div>
        </form>
        <p class="text-center">Don't have an account? <a href="register.php">Register</a></p>
    </div>
</div>
</body>
</html>
