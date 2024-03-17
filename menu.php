<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Lounge - Menu</title>
    <link rel="icon" type="image/png" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
  }

  .box {
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
        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .menui-container{
            background-color: #222;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            
        }
        .menui-container h2{
            color:#fff;
        }

        .menu-item {
            width: 300px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: background-color 0.3s ease;
            
        }

        .menu-item h2 {
            margin-top: 0;
            margin-bottom: 10px;
            color:#222;
            
        }
        

        .menu-item p {
            margin: 0;
        }

        .menu-item:hover {
            background-color: #e5cf8e;
        }
        .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: rgba(169, 169, 169, 0.9); 
    margin: 10% auto;
    padding: 20px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    width: 30%;
    max-height: 70vh;
    overflow-y: auto;
    border-radius: 10px;
    position: relative;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}



.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
}

.btn {
    background-color: #ffc107;
    color: #333;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 10px;
    transition: background-color 0.3s ease;
}

.btn.cancel {
    background-color: #dc3545;
}

.btn:hover {
    background-color: #ffca28;
}
.abc{
    float: right;
  }

    </style>
</head>

<body>

<?php
      $is_logged_in = isset($_GET['id']) && isset($_GET['firstname']);
      if ($is_logged_in) {
        $id = $_GET['id'];
        $first = $_GET['firstname'];
        // Now you can safely use $id and $first
    }
      ?>

<header>
    <div class="box">
      
        <h1>Coffee Cozy</h1>
        <nav>
          <div class="abc">
            <ul>
            <?php if (!$is_logged_in) { ?>
              <li><a href="login.html">Login</a></li>
              <li><a href="Regitration.html">Sign Up</a></li>
              
            <?php } ?>
            
            <?php if ($is_logged_in) { ?>
              <li><a href="cart.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="user.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>"><i class="fa fa-user"></i></a></li>
            <?php } ?>
              
             

            </ul>
          </div>
          <div>
            <ul>
            <?php if ($is_logged_in) { ?>
              <li><a href="home.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>">Home</a></li>
              <li><a href="about.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>">About</a></li>
                <li><a href="menu.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>">Menu</a></li>
                
            <?php } ?>
            <?php if (!$is_logged_in) { ?>
              <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="menu.php">Menu</a></li>
              
              
            <?php } ?>
               
                
            </ul>
          </div>
          
        </nav>
    </div>
</header>
    <br>
    <section class="menu">
    <div class="menui-container">
        <h2>Our Menu</h2>
        <div class="menu-container">
        <?php
include 'conf.php'; 

$sql = "SELECT name, description, price, image FROM item";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="menu-item" onclick="showItemDetails(\''. htmlspecialchars($row["name"]) .'\', \''. htmlspecialchars($row["description"]) .'\', \''. htmlspecialchars($row["price"]) .'\', \''. htmlspecialchars($row["image"]) .'\')">';
        echo '<h2>' . htmlspecialchars($row["name"]) . '</h2>';
        echo '<img src="' . htmlspecialchars($row["image"]) . '" alt="' . htmlspecialchars($row["name"]) . '" style="max-width: 100%;">';
        echo '<p>' . htmlspecialchars($row["description"]) . '</p>';
        echo '<b><p>Price: Rs.' . htmlspecialchars($row["price"]) . '</p></b>';
        echo '</div>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>

        </div>
    </div>
</section>



<div id="itemDetailsModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeItemDetailsModal()">&times;</span>
        <h2 id="itemTitle"></h2>
        <img id="itemImage" src="" alt="Item Image" style="max-width: 100%; height: auto;">
        <p id="itemDescription"></p>
        <b><p id="itemPrice"></p></b>
        <?php if (!$is_logged_in) { ?>
            <button class="btn" onclick="redirectToLogin()">Add to Cart</button>
              
            <?php } ?>
            <?php if ($is_logged_in) { ?>
            <button class="btn" onclick="addToCart()">Add to Cart</button>
              
            <?php } ?>
        
        <button class="btn cancel" onclick="closeItemDetailsModal()">Cancel</button>
    </div>
</div>



<script>
    let itemObj = null;
    let itemList = [];

    function redirectToLogin() {
        
        window.location.href = "login.html";
    }

    function showItemDetails(name, description, price, image) {
        const itemTitle = document.getElementById('itemTitle');
        const itemDescription = document.getElementById('itemDescription');
        const itemPrice = document.getElementById('itemPrice');
        const itemImage = document.getElementById('itemImage');

        itemTitle.innerText = name;
        itemDescription.innerText = description;
        itemPrice.innerText = 'Price: Rs.' + price;
        itemImage.src = image;

        document.getElementById('itemDetailsModal').style.display = 'block';
        itemObj = {
            name: name,
            description: description,
            price: price,
            image: image,
            quantity: 1
        };
    }

    function closeItemDetailsModal() {
        document.getElementById('itemDetailsModal').style.display = 'none';
    }

    function addToCart() {
        const existingItemIndex = itemList.findIndex(item => 
            item.name === itemObj.name &&
            item.description === itemObj.description &&
            item.price === itemObj.price &&
            item.image === itemObj.image
        );

        if (existingItemIndex !== -1) {
            itemList[existingItemIndex].quantity += 1;
        } else {
            itemList.push(itemObj);
        }

        localStorage.setItem('cartItems', JSON.stringify(itemList));
        console.log(localStorage.getItem('cartItems'));
        alert("Item Added to Cart")
    }
</script>




</body>

</html>