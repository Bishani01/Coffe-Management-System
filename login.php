<?php
include 'conf.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

   
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

    
    $result = mysqli_query($conn, $sql);

    // Check if a matching record is found
    if (mysqli_num_rows($result) > 0) {
        echo "Login successful";
        header("location: home.html");
        // Add any additional logic you need for a successful login

    } else {
        echo "Login failed. Invalid username or password.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
