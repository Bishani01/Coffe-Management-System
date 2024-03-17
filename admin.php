<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Items</title>
<link rel="icon" type="image/png" href="favicon.ico">
<!-- <link rel="stylesheet" href="regitration.css"> -->
<style>
body {
    margin: 0;
    padding: 0;
    background-image: url('back.jpg'); 
    background-size: cover;
    background-position: center;
    font-family: Arial, sans-serif;
}

table {
    border-collapse: collapse;
    width: 100%;
    background-color: #f2f2f2; /* Light gray background for the table */
}

th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #4CAF50; /* Green background for table header */
    color: white; /* White text color for table header */
}

tr:nth-child(even) {
    background-color: #f0f0f0; /* Light gray background for even rows */
}

tr:hover {
    background-color: #d9d9d9; /* Darker gray background for hovered rows */
}

.actions {
    text-align: center;
}

.actions button {
    background-color: #008CBA; /* Blue background for action buttons */
    color: white; /* White text color for action buttons */
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 3px;
    transition: background-color 0.3s;
}

.actions button:hover {
    background-color: #005f6b; /* Darker blue background on hover */
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

.container {
    background-color: #fff;
    
    max-width: 1500px;
    margin-top: 100px;
    padding: 0 20px;
  }

  .box {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  .abc{
    float: right;
  }


button {
    background-color: #4CAF50;
    color: white; 
    border: none; 
    padding: 10px 20px; 
    text-align: center;
    text-decoration: none; 
    display: inline-block; 
    font-size: 16px;
    margin-bottom: 10px;
    cursor: pointer; 
    border-radius: 5px; 
    margin-top: 10px;
}

button:hover {
    background-color: #45a049; /* Darker green color on hover */
}
button.delete-item {
    background-color: #f44336; /* Red background */
    color: white; /* White text color */
    border: none; /* Remove border */
    padding: 10px 20px; /* Add padding */
    text-align: center; /* Center text */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Make it inline block */
    font-size: 16px; /* Font size */
    margin-bottom: 10px; /* Add some bottom margin */
    cursor: pointer; /* Add cursor pointer */
    border-radius: 5px; /* Add border radius for rounded corners */
    margin-left: 10px;
}

button.delete-item:hover {
    background-color: #b71c1c; /* Darker red color on hover */
}
.add{
  float: right;
}

</style>

</head>
<body>
<header>
    <div class="box">
      
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
    <a href="additem.php" class="add"><button>Add Item</button></a> 
<table>
    <thead>
        <tr>
            <th>Item Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'conf.php';
        $sql = "SELECT * FROM item";
        $result = mysqli_query($conn, $sql);

        // Check if there are any rows returned
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>";
                // Add update button with a link to the update page
                echo "<a href='itemupdate.php?id=" . $row["id"] . "'><button>Update</button></a>";
                // Add delete button with a link to the delete script
                echo '<a href="delete_item.php?id=' . $row["id"] . '" onclick="return confirmDelete();"><button class="delete-item">Delete</button></a>';


                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No items found</td></tr>";
        }

        // Close the connection
        mysqli_close($conn);
        ?>
    </tbody>
</table>
    </div>

    <script>
function confirmDelete() {
    return confirm("Are you sure you want to delete this item?");
}
</script>

</body>
</html>
