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

        <!-- style link -->

        <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>

    <?php include('include/header.php') ?>

    <div class="log-page" style="background: url('./images/bgimg/log_img.jpg'); background-size: cover; width: 100%; background-repeat: no-repeat; height: 600px;">
        <div class="container">
            <h2>Login Form</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="User email" required>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="User password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>

    
</body>
</html>