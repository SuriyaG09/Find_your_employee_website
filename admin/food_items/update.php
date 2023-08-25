<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food_items Page</title>
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- CSS file for font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>

<?php
$id = $_GET['ID'];
$oid = (int)$id;

include 'config.php';
$sql = "SELECT * FROM `menu` WHERE id=$oid ";
$record = mysqli_query($con,$sql);
$data = mysqli_fetch_array($record);
?>
    
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">
        <form action="update.php" method="POST" enctype="multipart/form-data">

             
            <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-warning">Food_item Details Update</p>
                
                <label class="form-label">Food item Name: </label>
                <input type="text" value=" <?php echo $data['item_name']?>" name="iname" class="form-control" placeholder="Enter food item name">
                
            </div>
            <div class="mb-3"> 
                <label class="form-label">Food item ID: </label>
                <input type="number" value="<?php echo $data['id']?>" name="iid"  class="form-control" placeholder="Enter ID" >
            </div>

            <div class="mb-3">
                <label class="form-label">Food item price: </label>
                <input type="text" value="<?php echo $data['item_prize']?>" name="iprice"  class="form-control" placeholder="Enter product price">
            </div>

            <div class="mb-3">
                <label class="form-label">Time to prepare: </label>
                <input type="text" value="<?php echo $data['time']?>" name="itime"  class="form-control" placeholder="Duration...">
            </div>
<!-- al shift f to format -->
            <div class="mb-3"> 
                <label class="form-label">Add food item image: </label>
                <input type="file"  value="admin/food_items/menu/<?php echo $data['item_image']?>" name="iimage"  class="form-control" >
                <img src="admin/food_items/menu/<?php echo $data['item_image']?>" alt="$data['item_image']" style="height: 100px;">
            </div>

            <div class="mb-3"> 
                <label class="form-label">Select item Category: </label>
                <select class="form-select" name="itype" >
                    
                    <option value="1">Home_page food item</option>
                    <option value="0">Menu food item</option>
                    <!-- <option value="3">Yet to decide</option>
                    <option value="4">Yet to decide</option> -->
                </select>
            </div>
            
            <button name="update" class="bg-danger fd-4 fw-bold my-3 form-control text-white">Update</button>

        </form>

        </div>
    </div>
</div>

<!-- update food items -->

<?php
if(isset($_POST['update'])){
    //$id = $_POST['id'];
    $item_id = $_POST['iid'];
    $item_name = $_POST['iname'];
    $item_price = $_POST['iprice'];
    $item_time = $_POST['itime'];
    $item_image = $_FILES['iimage']['name'];
     //echo $item_image;
    $image_loc = $_FILES['iimage']['tmp_name'];
    $image_name = $_FILES['iimage']['name'];
    $img_des = $item_name;

    move_uploaded_file($image_loc,"menu/".$item_name);


    $category = $_POST['itype'];


    include 'config.php';
    $sqlupdate = "UPDATE `menu` SET `item_name`='$item_name',`item_prize`='$item_price',`time`='$item_time',`item_image`='$img_des',`home_items`='$category' WHERE `id`= $item_id";
    mysqli_query($con,$sqlupdate);
    header("location:items.php");
}
?>

</body>
</html>

