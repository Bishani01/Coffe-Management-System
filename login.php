<?php
include 'conf.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $sql = "SELECT id,	firstname FROM user WHERE username = '$username' AND password = '$password'";
    
    
    $result = mysqli_query($conn, $sql);

    
    if (mysqli_num_rows($result) > 0) {
       
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['id'];
        $first=$row['firstname'];
        
       
        header("location: home.php?user_id=$user_id&firstname=$first");
        exit(); 
        
    } else {
        echo "Login failed. Invalid username or password.";
    }


    mysqli_close($conn);
}
?>
