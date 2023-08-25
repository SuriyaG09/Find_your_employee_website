<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer details</title>
    
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- CSS file for font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">

 

<!-- fetch data -->
<h1>Customer details</h1>
<table class="table table-hover border my-5">
  
    
    <thead>
        <th>ID</th>
        <th>Chef Name</th>
        <th>Email</th>
        <th>Phone Number</th>
    </thead>

    <tbody>
        <?php

            include 'config.php';

            $i = 0;
            $record = mysqli_query($con,"SELECT * FROM `userinfo` WHERE `role`='1'");

            while($row = mysqli_fetch_array($record))
            
            echo"
            
            <tr>
            <td>$row[id]</td>
            <td>$row[username]</td>
            <td>$row[email]</td>
            <td>$row[phnumber]</td>
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