<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
   <!-- <?php print_r($_SESSION['cart']); ?> -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                <div class="card">
                    <img src="Images/1.jpg" class="card-img-top">
                    <div class="card-body text centre">
                        <h5 class="card-title">Table</h5>
                        <p class="card-text">Rs. 500</p>
                        <button type = "submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
                        <input type="hidden" name ="Item_Name" value="Table">
                        <input type="hidden" name ="Price" value="500">
                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                <div class="card">
                    <img src="Images/2.jpeg" class="card-img-top">
                    <div class="card-body text centre">
                        <h5 class="card-title">Tshirt</h5>
                        <p class="card-text">Rs. 600</p>
                        <button type = "submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
                        <input type="hidden" name ="Item_Name" value="Tshirt">
                        <input type="hidden" name ="Price" value="600">
                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                <div class="card">
                    <img src="Images/3.jpg" class="card-img-top">
                    <div class="card-body text centre">
                        <h5 class="card-title">Table 2</h5>
                        <p class="card-text">Rs. 700</p>
                        <button type = "submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
                        <input type="hidden" name ="Item_Name" value="Table 2">
                        <input type="hidden" name ="Price" value="700">
                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                <div class="card">
                    <img src="Images/4.jpg" class="card-img-top">
                    <div class="card-body text centre">
                        <h5 class="card-title">tshirt 2</h5>
                        <p class="card-text">Rs. 800</p>
                        <button type = "submit" class="btn btn-info" name="'Add_To_Cart">Add to Cart</button>
                        <input type="hidden" name ="Item_Name" value="tshirt 2">
                        <input type="hidden" name ="Price" value="800">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>