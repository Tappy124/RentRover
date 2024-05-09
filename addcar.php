<?php
session_start();

// initializing variables
$brand = "";
$model = "";
$year = "";
$color = "";
$rental_rate = "";
$available = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'carrental');

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// ADD CAR
if (isset($_POST['add_car'])) {
    // receive all input values from the form
    $brand = mysqli_real_escape_string($db, $_POST['brand']);
    $model = mysqli_real_escape_string($db, $_POST['model']);
    $year = mysqli_real_escape_string($db, $_POST['year']);
    $color = mysqli_real_escape_string($db, $_POST['color']);
    $rental_rate = mysqli_real_escape_string($db, $_POST['rental_rate']);
    $available = isset($_POST['available']) ? 1 : 0;

    // Check if the file field 'carpic' exists and is uploaded without errors
    if(isset($_FILES['carpic']) && is_uploaded_file($_FILES['carpic']['tmp_name'])) {
        $carpic = $_FILES["carpic"]["name"];

        // File upload handling
        $target_dir = "uploads/carpics/";
        $target_file = $target_dir . basename($_FILES["carpic"]["name"]);
        
        // Get image file extension
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Allow certain file formats
        $allowed_extensions = array("jpg", "jpeg", "png", "gif", "webp");
        if(!in_array($imageFileType, $allowed_extensions)) {
            array_push($errors, "Only JPG, JPEG, PNG, webp and GIF files are allowed");
        } else {
            if(move_uploaded_file($_FILES["carpic"]["tmp_name"], $target_file)) {
                // File uploaded successfully
                echo "File uploaded successfully";
            } else {
                array_push($errors, "Failed to upload car picture");
            }
        }
    } else {
        array_push($errors, "Picture is required");
    }

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($brand)) { array_push($errors, "Brand is required"); }
    if (empty($model)) { array_push($errors, "Model is required"); }
    if (empty($year)) { array_push($errors, "Year is required"); }
    if (empty($color)) { array_push($errors, "Color is required"); }
    if (empty($rental_rate)) { array_push($errors, "Rate is required"); }
    if (empty($available)) { array_push($errors, "Available is required"); }

    // Check if car already exists in the database
    $car_check_query = "SELECT * FROM cars WHERE brand='$brand' AND model='$model' AND year='$year'";
    $result = mysqli_query($db, $car_check_query);
    if (!$result) {
        die("Query failed: " . mysqli_error($db));
    }
    $car = mysqli_fetch_assoc($result);
    if ($car) {
        array_push($errors, "Car already exists");
    }

    // If no errors, add car to database
    if (count($errors) == 0) {
        $query = "INSERT INTO cars (brand, model, year, color, rental_rate, available, carpic) 
                  VALUES('$brand', '$model', '$year', '$color', '$rental_rate', '$available', '$target_file' )";
        if (mysqli_query($db, $query)) {
            // Redirect to cars page
            header('Location: cars.php');
            exit();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
 