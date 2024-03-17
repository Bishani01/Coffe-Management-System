<?php
include 'conf.php';

if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "DELETE FROM item WHERE id = '$id'";
    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['success_message'] = "User deleted successfully.";
        header("Location: admin.php"); // Redirect to the admin page after successful deletion
        exit();
    } else {
        echo "Error deleting user: " . $conn->error;
    }
} else {
    echo "Error: Item ID not provided";
}

mysqli_close($conn);
?>
