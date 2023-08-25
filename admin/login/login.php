<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body style="background-image: url('about.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
                <p class = "text-primary text-center fd-3 fw-bold my-3">Admin Login Form</p>
                <form action="logincheck.php" method="POST">
                    <div class="mb-3">
                        <label for="name">Username</label>
                        <input type="text" name = "name" placeholder="Enter your name" class= "form-control">
                        <label for="password">Password</label>
                        <input type="password" name = "password" placeholder="Enter password" class= "form-control">

                    </div>
                    <div class="mb-3">
                    <button name="submit" class="w-100 bg-danger fs-6 text-white">Login</button>
                    </div>
                    <div class="mb-3">
                    <button class="w-100 bg-primary fs-6 text-white"> <a href="register.php" class = "text-decoration-none text-white"> Sign Up</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body> 
</html>