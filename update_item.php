<?php
// Include configuration file and establish database connection
include 'conf.php';

// Check if form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    $id = $_POST['id'];
    $itemName = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $link = $_POST['image'];

    // Update item in the database
    $sql = "UPDATE item SET name='$itemName', description='$description', price='$price', image='$link' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        // Redirect to the update page with success message
        session_start();
        $_SESSION['success_message'] = "Item updated successfully.";
        header("Location: itemupdate.php?id=$id");
        exit();
    } else {
        echo "Error updating item: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If form is not submitted with POST method, redirect to the update page
    header("Location: update.php");
    exit();
}
?>
