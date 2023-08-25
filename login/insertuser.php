<?php

$con = mysqli_connect('localhost','root','','menulist');

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phnum = $_POST['phone'];
    $password = $_POST['password'];

    $email_copy = mysqli_query($con,"SELECT * FROM `userinfo` WHERE `email`='$email'");
    
    $username_copy = mysqli_query($con,"SELECT * FROM `userinfo` WHERE `username`='$name'");

    if(mysqli_num_rows($email_copy)){
        echo
        "
        <script>alert('Email is already in use');
        window.location.href='register.php';
        </script>
        ";
    }
    if(mysqli_num_rows($username_copy)){
        echo
        "
        <script>alert('Username is already in use');
        window.location.href='register.php';
        </script>
        ";
    }
    else{
        $sql = "INSERT INTO `userinfo`(`username`, `email`, `phnumber`, `password`,`role`) VALUES ('$name','$email','$phnum','$password','1')";
        mysqli_query($con,$sql);
        echo
        "
        <script>alert('User successfully registered');
        window.location.href='register.php';
        </script>
        ";
    }
}

?>