
<?php
include 'conf.php';




$firstname=$_POST["firstname"];
$surname=$_POST["surname"];
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];


$sql="INSERT INTO user(firstname,surname,username,email,password)
VALUES('$firstname','$surname','$username','$email','$password')";


if(mysqli_query($conn,$sql)){
	header("Location: login.html?success=true"); 
    exit();
}
else{
	echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}
	
mysqli_close($conn);
?>
