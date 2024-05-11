<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Admin Panel</title>
    <link rel="stylesheet" href="assets/css/add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="add-car-form">
                <h2>Add Promo Code</h2>
                <form action="addcode.php" method="post" enctype="multipart/form-data">
                     
                    Discount Name: <input type="text" name="code"><br>
                    Discount Percentage: <input type="number" name="discount"><br>
                    
            
            <input type="submit" name="add_code" value="Add Code">
</form>

            </div>
        </div>
    </div>
</body>

</html>
