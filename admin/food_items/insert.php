<?php

if(isset($_POST['submit'])){


    include 'config.php';

    $item_id = $_POST['iid'];
    $item_name = $_POST['iname'];
    $item_price = $_POST['iprice'];
    $item_time = $_POST['itime'];
    $item_image = $_FILES['iimage']['name'];
     //echo $item_image;
    $image_loc = $_FILES['iimage']['tmp_name'];
    $image_name = $_FILES['iimage']['name'];
    //$img_des = "/".$item_name;
    $img_des = $item_name;

    $category = $_POST['itype'];

   // move_uploaded_file($image_loc,"upload_image/".$item_name);
   move_uploaded_file($image_loc,"menu/".$item_name);

    //insert_product

    //mysqli_query($con,"insert into `insert`(`name`,`price`,`image`,`category`) values ('$item_name','$item_price','$img_des','$category')");

    $sql="INSERT INTO `menu`(`id`, `item_name`, `item_prize`, `time`, `item_image`, `item_quantity`, `home_items`) VALUES ('$item_id','$item_name','$item_price','$item_time','$img_des','1','$category')";

    mysqli_query($con,$sql);

}


?>

<?php


header("location:items.php");

?>