<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef page</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- CSS file for font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!-- Linking CSS file -->
<link rel="stylesheet" href="css/style.css">

</head>

<?php
session_start();


?>

<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white" href="#"><h1>No_waiters.com</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul> -->
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->

      <!-- <span>
        <i class="fas fa-user-shield"></i>Hello,
        <i class="fas fa-sign-out-alt"></i>
        <a href="" class="text-decoration-none text-white">Signout</a>
        <a href="" class="text-decoration-none text-white">User panel</a>
      </span> -->

      <p class="sub-heading">Hello, Chef
            <?php 
            #session_start();
            if(isset($_SESSION['chef'])){
            echo $_SESSION['chef'];
            echo "<i class='fas fa-user-shield'></i>";
            echo "<a href = 'login/logout.php' class='text-decoration-none' style='color:white'><br> logout<i class='fas fa-sign-out-alt'></i></a>";

            }
            else{
                echo "<a href = 'login/login.php' class='text-decoration-none' style='color:white'>login<i class='fas fa-user-shield'></i></a>";
            }
        ?></p>
      
    </div>
  </div>
</nav>

<div>
  <h2 class="text-center">
    Dashboard
  </h2>
</div>

<div class="col-md-6 bg-danger text-center m-auto"> 
  <a href="customer_orders.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Orders pending</a>
  <a href="" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
</div>

<?php include 'about/aboutus.php';?>
<?php include 'footer.php';?>


</body>
</html>