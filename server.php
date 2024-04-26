<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = " ";
$database = "carrental";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user inputs
function sanitize_input($input) {
    return htmlspecialchars(trim($input));
}

// Function to handle user registration
function register_user($username, $password) {
    global $conn;
    
    // Sanitize inputs
    $username = sanitize_input($username);
    // You should hash the password before storing it in the database for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if username already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return "Username already exists";
    } else {
        // Insert new user into database
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);
        if ($stmt->execute()) {
            return "Registration successful";
        } else {
            return "Registration failed";
        }
    }
}

// Function to handle user login
function login_user($username, $password) {
    global $conn;

    // Sanitize inputs
    $username = sanitize_input($username);

    // Check if username exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $row['password'])) {
            return "Login successful";
        } else {
            return "Invalid password";
        }
    } else {
        return "User not found";
    }
}

// Example usage:
// Register a user
//$registration_result = register_user("example_user", "example_password");
//echo $registration_result;

// Login a user
//$login_result = login_user("example_user", "example_password");
//echo $login_result;

// Close connection
$conn->close();
?>
