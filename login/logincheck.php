<?php

// if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $password = $_POST['password'];

    $con = mysqli_connect('localhost','root','','menulist');
    $sql = "SELECT * FROM `userinfo` WHERE (username = '$name') and password = '$password' and role = '1'";
    $result = mysqli_query($con,$sql);

    session_start();
    if(mysqli_num_rows($result)){

        $_SESSION['username'] = $name;

        $_SESSION['last_login_timestamp'] = time();
        echo
        "
        <script>alert('login successfull');
        window.location.href='../index.php';
        </script>
        ";
    }
    
    else{
        echo
        "
        <script>alert('login unsuccessfull');
        window.location.href='login.php';
        </script>
        ";

    }


// }


?>