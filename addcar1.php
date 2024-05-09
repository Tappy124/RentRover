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
                <h2>Add New Car</h2>
                <form action="addcar.php" method="post" enctype="multipart/form-data">
                    Brand: <input type="text" name="brand"><br>
                    Model: <input type="text" name="model"><br>
                    Color: <input type="text" name="color"><br>
                    Year: <input type="text" name="year"><br>
                    Rental Rate: <input type="text" name="rental_rate"><br>
                    Units Available: <input type="number" name="available"><br>
                    Car Image: <input type="file" name="carpic"><br>
            <input type="submit" name="add_car" value="Add Car">
</form>

            </div>
        </div>
    </div>
</body>

</html>
