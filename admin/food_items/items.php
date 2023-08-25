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
    
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">
        <form action="insert.php" method="POST" enctype="multipart/form-data">

             
            <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-warning">Food_item Details</p>
                
                <label class="form-label">Food item Name: </label>
                <input type="text" name="iname" class="form-control" placeholder="Enter food item name">
            </div>
            <div class="mb-3"> 
                <label class="form-label">Food item ID: </label>
                <input type="number" name="iid"  class="form-control" placeholder="Enter ID" >
            </div>

            <div class="mb-3">
                <label class="form-label">Food item price: </label>
                <input type="text" name="iprice"  class="form-control" placeholder="Enter product price">
            </div>

            <div class="mb-3">
                <label class="form-label">Time to prepare: </label>
                <input type="text" name="itime"  class="form-control" placeholder="Duration...">
            </div>
<!-- al shift f to format -->
            <div class="mb-3"> 
                <label class="form-label">Add food item image: </label>
                <input type="file" name="iimage"  class="form-control" >
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

            <button name="submit" class="bg-danger fd-4 fw-bold my-3 form-control text-white">Submit</button>

        </form>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">

 

<!-- fetch data -->

<table class="table table-hover border my-5">
  
    <thead>
        <th>Item Name</th>
        <th>Item Price</th>
        <th>Item Image</th>
        <th>Item Category</th>
        <th>Time to  Prepare</th>
        <th>Delete</th>
        <th>Update</th>
    </thead>

    <tbody>
        <?php

            include 'config.php';

            $record = mysqli_query($con,"SELECT * FROM `menu`");

            while($row = mysqli_fetch_array($record))
            
            echo"
            
            <tr>

            <td>$row[id]</td>
            <td>$row[item_name]</td>
            <td>$row[item_prize]</td>
            <td><img src=\"menu/$row[item_image]\" alt=\"$row[item_image]\" height=\"100px\" width=\"180\"></td>
            <td>$row[time] minutes</td>
            <td><a href='delete.php? ID= $row[id]' class='btn btn-danger'>DELETE</a></td>
            <td><a href='update.php? ID= $row[id]' class = 'btn btn-warning'>UPDATE</a></td>
            </tr>
            
            ";

        
        ?>
    </tbody>
    
    <!-- \"images/menu/$item_image\" alt=\"$item_image\"
            'C:\xampp\htdocs\food website\images\menu\.$row[item_image].' -->

</table>

</div>
    </div>
</div>

</body>
</html>