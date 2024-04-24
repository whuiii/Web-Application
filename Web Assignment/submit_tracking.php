<?php
$host = "localhost";
$db_username = "id21856048_gymnity_database"; // Your database username
$password = "Gymnity@2024"; // Your database password
$database = "id21856048_gymnity_2024"; // Your database name

// Establish a connection to the database
$conn = new mysqli($host, $db_username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connect sucess";
}

// Retrieve data from the form
$trackingEvent = $_POST['trackingEvent'];
$fromTime = $_POST['fromTime'];
$toTime = $_POST['toTime'];

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO tracking (trackingEvent, fromTime, toTime) VALUES ('$trackingEvent', '$fromTime', '$toTime')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
