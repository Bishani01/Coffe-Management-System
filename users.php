<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Users</title>

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

/* Your CSS styles here */
button {
    background-color: #4CAF50; /* Green background */
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
<div class="container">
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conf.php';
            $sql = "SELECT * FROM user";
            $result = mysqli_query($conn, $sql);

            // Check if there are any rows returned
            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["firstname"] . "</td>";
                    echo "<td>" . $row["surname"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>";
                    // Add update button with a link to the update page
                    echo '<a href="delete_user.php?id=' . $row["id"] . '" onclick="return confirmDelete();"><button class="delete-item">Delete</button></a>';
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No users found</td></tr>";
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
