<?php
session_start();
include 'conf.php';

if (isset($_POST["fitname"]) && isset($_POST["surname"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["id"])) {
  
    $id = $_POST["id"];
    $firstname = $_POST["fitname"];
    $surname = $_POST["surname"];
    $username = $_POST["username"];
    $email = $_POST["email"];

    $sql = "UPDATE user SET firstname='$firstname', surname='$surname', username='$username', email='$email' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success_message'] = "User details updated successfully.";
        header("Location: user.php?id=$id&firstname=$firstname");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
   
    $missingFields = [];
    if (!isset($_POST["fitname"])) {
        $missingFields[] = "First Name";
    }
    if (!isset($_POST["surname"])) {
        $missingFields[] = "Surname";
    }
    if (!isset($_POST["username"])) {
        $missingFields[] = "Username";
    }
    if (!isset($_POST["email"])) {
        $missingFields[] = "Email";
    }
    if (!isset($_POST["id"])) {
        $missingFields[] = "ID";
    }

    echo "Error: Required data missing for fields: " . implode(", ", $missingFields);
}
?>

