<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Item - Coffee Cozy</title>
<link rel="icon" type="image/png" href="favicon.ico">
<link rel="stylesheet" href="user.css"> <!-- Include your CSS file -->
<style>
/* Your additional styles */

.container {
    background-color: #222;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    margin-top: 20px;
    color: #fff;
    margin-bottom: 20px;
  }
  .container h2{
    color: #fff;
  }

</style>
</head>
<body>

<header>
    <div class="box">
        <h1>Coffee Shop</h1>
        <nav>
            <div class="abc">
                <ul>
                <li><a href="adminlogin.html">Log Out</a></li>
                </ul>
            </div>
            <div>
                <ul>
                <li><a href="users.php">Users</a></li>
                <li><a href="admin.php">Items</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="container">
<h2>Create Item</h2>
<form action="add_item.php" method="post">
            <input type="hidden" name="id" value="' . $id . '">
            <label for="itemName">Item Name</label>
            <input type="text" id="name" name="name"  required>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" rows="6"required>
            <label for="price">Price</label>
            <input type="text" id="price" name="price"required>
            <label for="link">Image</label>
            <input type="text" id="image" name="image" required>
            <input type="submit" value="Create">
          </form>'
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
            <p>&copy; 2024 Coffee Cozy. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>
