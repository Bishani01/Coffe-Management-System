<?php
// Include the database configuration file
include 'conf.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $itemName = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $link = $_POST["image"];

    // Prepare the SQL statement
    $sql = "INSERT INTO item (name, description, price, image) VALUES (?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssds", $itemName, $description, $price, $link);

        // Execute the statement
        if ($stmt->execute()) {
            // Item inserted successfully
            session_start();
            $_SESSION['success_message'] = "Item added successfully.";
            header("Location: admin.php");
            exit();
        } else {
            // Error while executing the statement
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Error while preparing the statement
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
