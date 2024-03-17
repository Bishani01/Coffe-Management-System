<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopping Cart - Coffee Kade</title>
<link rel="icon" type="image/png" href="favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-abc123==" crossorigin="anonymous" />

<style>
  /* Your existing styles */
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

  .hero {
    background-image: url('coffee-background.jpg');
    background-size: cover;
    background-position: center;
    color: #fff;
    text-align: center;
    padding: 100px 0;
  }

  .hero h2 {
    font-size: 48px;
    margin-bottom: 20px;
    color: #fff;
  }

  .hero p {
    font-size: 20px;
    margin-bottom: 30px;
    color: #fff;
  }

  .btn {
    display: inline-block;
    background-color: #ffc107;
    color: #333;
    padding: 12px 24px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

  .btn:hover {
    background-color: #ffca28;
  }

 .cart-container {
    padding: 80px 0;
  }

  .cart-item {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .cart-item img {
    max-width: 100px;
    margin-right: 20px;
  }

  .cart-item-details {
    display: flex;
    align-items: center;
  }

  .cart-item-details h3 {
    margin-bottom: 10px;
  }

  .cart-item-price {
    margin-top: 10px;
    font-weight: bold;
  }

  .cart-total {
    margin-top: 20px;
    font-size: 24px;
    font-weight: bold;
    color:#fff;
  }

  .checkout-btn {
    display: block;
    width: 200px;
    margin: 20px auto;
    margin-bottom: 15px;
    padding: 12px 24px;
    background-color: #1dab5f;
    color: #333;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

  .checkout-btn:hover {
    background-color: #ffca28;
  } 
  footer {
    background-color: #222;
    color: #fff;
    padding: 50px 0;
    text-align: center;
  }

  .footer-social-icons {
    margin-bottom: 20px;
  }

  .footer-social-icons a {
    color: #fff;
    font-size: 24px;
    margin: 0 10px;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-social-icons a:hover {
    color: #ffc107;
  }

  .footer-links {
    margin-bottom: 20px;
  }

  .footer-links a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
    transition: color 0.3s ease;
  }

  .footer-links a:hover {
    color: #ffc107;
  }

  .footer-info {
    font-size: 14px;
  }
  .abc{
    float: right;
  }
</style>
</head>
<body>
<?php
      // Retrieve the user ID and username from the URL query parameter
      $id = $_GET['id'];
      $first = $_GET['firstname'];
      ?>

    <header>
        <div class="box">
            <h1>Coffee Shop</h1>
            <nav>
              <div class="abc">
                <ul>
                  <li><a href="cart.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>"><i class="fa fa-shopping-cart"></i></a></li>
                    <li><a href="user.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>"><i class="fa fa-user"></i></a></li>
                </ul>
              </div>
              <div>
                <ul>
                    <li><a href="home.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>">Home</a></li>
                    <li><a href="about.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>">About</a></li>
                    <li><a href="menu.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>">Menu</a></li>
                   
                  
                    
                </ul>
              </div>
              
            </nav>
            <ul>
              
            </ul>
        </div>
    </header>

    <section class="cart-container">
        <div class="container" id="cartItemsContainer">
            <!-- Cart items will be dynamically added here -->
        </div>
    </section>

<footer>
    <div class="container">
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
             <p>&copy; 2024 Coffee Crozy. All rights reserved.</p>
        </div>
    </div>
</footer>
<script>
        const storedItemList = localStorage.getItem('cartItems');
        const cartItemsContainer = document.getElementById('cartItemsContainer');

        if (storedItemList) {
            const itemList = JSON.parse(storedItemList);
itemList.forEach(item => {
    item.price = parseFloat(item.price);
    const cartItemDiv = document.createElement('div');
    cartItemDiv.classList.add('cart-item');
    const cartItemDetailsDiv = document.createElement('div');
    cartItemDetailsDiv.classList.add('cart-item-details');
    const img = document.createElement('img');
    img.src = item.image;
    img.alt = 'Product Image';
    cartItemDetailsDiv.appendChild(img);
    const productDetailsDiv = document.createElement('div');
    const productName = document.createElement('h3');
    productName.textContent = item.name;
    const quantity = document.createElement('p');
    quantity.textContent = `Quantity: ${item.quantity}`;
    const desc = document.createElement('p');
    desc.textContent = `Description: ${item.description}`;
    productDetailsDiv.appendChild(productName);
    productDetailsDiv.appendChild(quantity);
    productDetailsDiv.appendChild(desc);
    cartItemDetailsDiv.appendChild(productDetailsDiv);
    const cartItemPriceDiv = document.createElement('div');
    cartItemPriceDiv.classList.add('cart-item-price');
    cartItemPriceDiv.textContent = `Rs.${item.price.toFixed(2)}`;

    cartItemDiv.appendChild(cartItemDetailsDiv);
    cartItemDiv.appendChild(cartItemPriceDiv);

    cartItemsContainer.appendChild(cartItemDiv);
});

        } else {
            console.log('No items in cart');
        }
    </script>



</body>
</html>
