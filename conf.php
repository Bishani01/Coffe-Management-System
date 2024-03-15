<?php
$servername="localhost"; // your device
$username="root";
$password="";
$dbname="coffeeshop";

// create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

//check connection

if(!$conn) {
die("connection failed:".mysqli_connect_error());
}
// echo"Connected successfully";
?>