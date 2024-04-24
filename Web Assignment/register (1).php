<?php
session_start();
// Connect to the database
$host = "localhost";
$db_username = "id21856048_gymnity_database"; // Changed variable name to avoid conflict
$password = "Gymnity@2024";
$database = "id21856048_gymnity_2024";

$db = new mysqli($host, $db_username, $password, $database );

// Check for a connection error
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Get the form data
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

// Validate the form data
$errors = array();
if (empty($name)) {
    // $errors[] = 'Name is required.';
    $error[]= header("Location: register_html.php?error=Name is required");
    exit();
}

if (empty($username)) {
    // $errors[] = 'Username is required.';
    $error[]=header("Location: register_html.php?error=User Name is required");
    exit();
}

if (empty($password)) { 
    // $errors[] = 'Password is required.';
    $error[]=header("Location: register_html.php?error=Password is required");
    exit();
}

// If there are no errors, proceed with inserting data into the database
if (empty($errors)) {
    // Check if the username already exists in the database
    $check_query = "SELECT * FROM register WHERE username = ?";
    $check_stmt = $db->prepare($check_query);
    $check_stmt->bind_param("s", $username);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    $check_stmt->close();
    
    if ($check_result->num_rows > 0) {
        // Username already exists
        //$errors[] = 'Username already exists.';
        // $errors[] = callAlert('Username already exists');
        $error[]=header("Location: register_html.php?error=Username exists");
    exit();
    } else {
        // Insert the data into the database
        $insert_stmt = $db->prepare("INSERT INTO register (name, username, password) VALUES (?, ?, ?)");
        $insert_stmt->bind_param("sss", $name, $username, $password);
        $insert_stmt->execute();
        $insert_stmt->close();
        
        // Redirect to login page
        header("Location: https://orthoscopic-cable.000webhostapp.com/Web%20Assignment/testing.php");
        exit; // Make sure to exit after redirection
    }
}

// Display errors to the user
foreach ($errors as $error) {
    echo "<p>Error: $error</p>";
}

// Close the database connection
$db->close();
?>