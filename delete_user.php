<?php
include 'conf.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform delete query
    $sql = "DELETE FROM user WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['success_message'] = "User deleted successfully.";
        header("Location: users.php"); // Redirect to the admin page after successful deletion
        exit();
    } else {
        echo "Error deleting user: " . $conn->error;
    }

    $conn->close();
} else {
    echo "User ID not provided";
}
?>
