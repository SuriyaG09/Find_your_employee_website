<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menu Page</title>

     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- CSS file for font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
<br>
<h1>Menu</h1>
<table class="table table-hover border my-5">
  
    <thead>
        <th>Functions</th>
        <th>Click here</th>
        
    </thead>

    <tbody>
        <tr>
            <td><span>Chef Details</span></td>
            <td>
            <form action="showdetails.php" method="POST">
    
                <button name="submit" class="bg-danger fd-4 fw-bold my-3 text-white">Chef</button>
            </form>

            </td>
        </tr>
        <tr>
            <td>
            <span>Order Details</span>
            </td>
            <td>

            <form action="showuserdetails.php" method="POST">

            <button name="submit" class="bg-primary fd-4 fw-bold my-3 text-white">Customer</button>
            </form>
            </td>

        </tr>
        <tr>
            <td>
            <span>Reservation Details</span>
            </td>
            <td>

            <form action="checkres.php" method="POST">

            <button name="submit" class="bg-warning fd-4 fw-bold my-3 text-white">Pending Table Reservation</button>
            </form>

            <form action="appres.php" method="POST">

            <button name="submit" class="bg-primary fd-4 fw-bold my-3 text-white">Approved Table Reservation</button>
            </form>

            <form action="deniedres.php" method="POST">

            <button name="submit" class="bg-danger fd-4 fw-bold my-3 text-white">Denied Table Reservation</button>
            </form>
            </td>

        </tr>
        <tr>
            <td><span>Order Details</span></td>
            <td>
            <form action="showorders.php" method="POST">
    
                <button name="submit" class="bg-primary fd-4 fw-bold my-3 text-white">Order details</button>
            </form>

            </td>
        </tr>
    </tbody>
    
    <!-- \"images/menu/$item_image\" alt=\"$item_image\"
            'C:\xampp\htdocs\food website\images\menu\.$row[item_image].' -->

</table>

</div>
    </div>
</div>

</body>
</html>