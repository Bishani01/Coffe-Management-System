
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
echo"Connected successfully";



$firstname=$_POST["firstname"];
$surname=$_POST["surname"];
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];


$sql="INSERT INTO user(firstname,surname,username,email,password)
VALUES('$firstname','$surname','$username','$email','$password')";


if(mysqli_query($conn,$sql)){
	echo "new reocrd created successfully";
	header("location: login.html");
}
else{
	echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}
	
mysqli_close($conn);
?>
