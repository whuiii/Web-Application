<?php
session_start();
// Connect to the database
$host = "localhost"; // This might need to be updated, check your hosting provider's documentation
$db_username = "id21856048_gymnity_database"; // Update with your actual database username
$password = "Gymnity@2024"; // Update with your actual database password
$database = "id21856048_gymnity_2024"; // Update with your actual database name

// Create a connection
$db = new mysqli($host, $db_username, $password, $database);

// Check for connection errors
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Get the form data
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: testing.php?error=User Name is required");
        exit();
    } else if (empty($password)) {
        header("Location: testing.php?error=Password is required");
        exit();
    } else {
        // Prepare the SQL query
        $sql = "SELECT * FROM register WHERE username='$username' AND password='$password'";
        
        // Execute the query
        $result = $db->query($sql);
        
        // Check if there are any results
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            
            // Verify if the username and password match
            if($row['username'] === $username && $row['password'] === $password){
                // Set session variables
                $_SESSION['user'] = $row['user'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                
                // echo "Hello"; can run
                // Redirect to homepage.php
                header("Location: transition_loading.html");
                exit();
            }else{
                header("Location: testing.php?error=Incorrect User name or password");
                exit();
            }
        }else{
            header("Location: testing.php?error=Incorrect User name or password");
            exit();
        }
    }
} else {
    header("Location: testing.php?error");
    exit();
}

// Close the database connection
$db->close();
?>
