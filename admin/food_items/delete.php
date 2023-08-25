<?php

$id = $_GET['ID'];

// echo $id;

include 'config.php';

mysqli_query($con,"DELETE FROM `menu` WHERE `id`=$id");
header("location:items.php");

?>