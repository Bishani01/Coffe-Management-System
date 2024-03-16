<?php
include 'conf.php';

if(isset($_GET['user_id'])) {


    $user_id = $_GET['user_id'];

    $sql = "SELECT * FROM user WHERE id = $user_id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstName = $row["firstname"];
        $surname = $row["surname"];
        $username = $row["username"];
        $email = $row["email"];
    } else {
        echo "User not found";
    }

    $conn->close();
} else {
    echo "User ID not provided";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Details - Java Lounge</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="user.css">
<style>
/* Your existing styles */
</style>
</head>
<body>
<?php
      // Retrieve the user ID and username from the URL query parameter
      $user_id = $_GET['user_id'];
      $first = $_GET['firstname'];
      ?>

<header>
    <div class="box">
        <h1>Coffee Shop</h1>
        <nav>
          <div class="abc">
            <ul>
              <li><a href="cart.php?user_id=<?php echo $user_id; ?>&firstname=<?php echo$first?>"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="user.php?user_id=<?php echo $user_id; ?>&firstname=<?php echo$first?>"><i class="fa fa-user"></i></a></li>
            </ul>
          </div>
          <div>
            <ul>
                <li><a href="home.php?user_id=<?php echo $user_id; ?>&firstname=<?php echo$first?>">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="menu.php?user_id=<?php echo $user_id; ?>&firstname=<?php echo$first?>">Menu</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
        </nav>
        <ul>
        </ul>
    </div>
</header>

<div class="container">
    <form id="userDetailsForm" action="#p" method="post">
        <h2>Update Your Details</h2>
        <label for="fitname">First Name</label>
        <input type="text" id="fitname" name="fitname" value="<?php echo $firstName; ?>" required autocomplete="off">
        <label for="surname">Surname</label>
        <input type="text" id="surname" name="surname" value="<?php echo $surname; ?>" required autocomplete="off">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>" required autocomplete="off">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required autocomplete="off">
        <input type="submit" value="Update">
    </form>
</div>

<footer>
    <div class="acontainer">
        <div class="footer-social-icons">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
        </div>
        <div class="footer-info">
            <p>&copy; 2024 Java Lounge. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
