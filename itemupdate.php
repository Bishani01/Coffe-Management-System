<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Item</title>
<link rel="icon" type="image/png" href="favicon.ico">
<link rel="stylesheet" href="regitration.css">
<style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
    background-image: url('back.jpg');
    background-size: cover;
    background-position: center;
}


  .container {
    background-color: #222;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    margin-top: 20px;
    color: #fff;
  }
  .container h2{
    color: #fff;
  }

  .abox {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  header {
    background-color: #222;
    color: #fff;
    padding: 20px 0;
  }

  header h1 {
    font-size: 36px;
  }

  nav ul {
    list-style: none;
    text-align: center;
  }

  nav ul li {
    display: inline;
    margin-right: 20px;
  }

  nav ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  

  nav ul li a:hover {
    color: #ffc107;
  }
  .box {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  .abc{
    float: right;
  }
</style>
</head>
<body>
<header>
    <div class="abox">
      
        <h1>Coffee Cozy</h1>
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

<?php
    // Check if a session is not active
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if success message is set
    if (isset($_SESSION['success_message'])) {
        echo '<div class="message-box success" style="background-color: #d4edda; border: 1px solid #13A034; color: #13A034; padding: 10px; margin-bottom: 20px;">';
        echo '<p style="background-color: #d4edda; border-color: #c3e6cb; color: #222;">' . $_SESSION['success_message'] . '</p>';
        echo '</div>';

        // Unset the success message to avoid displaying it again on page reload
        unset($_SESSION['success_message']);
    }
?>
  <div class="container">
    <h2>Update Item</h2>
    <?php
      // Include configuration file and establish database connection
      include 'conf.php';

      // Check if item ID is provided
      if(isset($_GET['id'])) {
        $id = $_GET['id'];
        
        // Fetch item details from the database
        $sql = "SELECT * FROM item WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $itemName = $row["name"];
          $description = $row["description"];
          $price = $row["price"];
          $link = $row["image"];

          // Display the update form with pre-filled values
          echo '
          <form action="update_item.php" method="post">
            <input type="hidden" name="id" value="' . $id . '">
            <label for="itemName">Item Name</label>
            <input type="text" id="name" name="name" value="' . $itemName . '" required>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" rows="6" value="' . $description .'"required>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" value="' . $price . '" required>
            <label for="link">Image</label>
            <input type="text" id="image" name="image" value="' . $link . '" required>
            <input type="submit" value="Update">
          </form>';
        } else {
          echo "Item not found.";
        }

        // Close the database connection
        $conn->close();
      } else {
        echo "Item ID not provided.";
      }
    ?>
  </div>
</body>
</html>
