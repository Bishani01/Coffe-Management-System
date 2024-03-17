<?php

$correctUsername = "admin";
$correctPasswordHash = password_hash("admin", PASSWORD_DEFAULT); 


$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ?  trim($_POST['password']) : '';


if ($username === $correctUsername && password_verify($password, $correctPasswordHash)) {
    session_start(); 
    $_SESSION['logged_in'] = true; 
    header('Location: admin.php');
    exit;
} else {
    header("Location: adminlogin.html?login_fail=true");
    exit;
}
?>
