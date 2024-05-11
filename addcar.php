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
    $available = isset($_POST['available']) ? $_POST['available'] : 0;
    
    // Image upload handling
    if(isset($_FILES['carpic']) && is_uploaded_file($_FILES['carpic']['tmp_name'])) {
        $target_dir = "uploads/carpics/";
        $target_file = $target_dir . basename($_FILES["carpic"]["name"]);
        
        // Check if the file is an image
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
            array_push($errors, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        } else {
            if(move_uploaded_file($_FILES["carpic"]["tmp_name"], $target_file)) {
                // Image uploaded successfully
            } else {
                array_push($errors, "Failed to upload car picture.");
            }
        }
    } else {
        array_push($errors, "Picture is required.");
    }

    // form validation
    if (empty($brand)) { array_push($errors, "Brand is required."); }
    if (empty($model)) { array_push($errors, "Model is required."); }
    if (empty($year)) { array_push($errors, "Year is required."); }
    if (empty($color)) { array_push($errors, "Color is required."); }
    if (empty($rental_rate)) { array_push($errors, "Rate is required."); }
    
    // If no errors, add car to database
    if (count($errors) == 0) {
        $query = "INSERT INTO cars (brand, model, year, color, rental_rate, available, carpic) 
                  VALUES('$brand', '$model', '$year', '$color', '$rental_rate', '$available', '$target_file')";
        if (mysqli_query($db, $query)) {
            header('Location: cars.php');
            exit();       
         } 
    else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
