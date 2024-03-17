<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>About Us - Java Lounge</title>
<style>
  /* Reset CSS */
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
  }

  .container {
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

  .about {
    text-align: center;
    padding: 80px 0;
    background-color: #fff;
  }

  .about h2 {
    font-size: 36px;
    margin-bottom: 20px;
  }

  .about p {
    font-size: 18px;
    margin-bottom: 40px;
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
              <li><a href="login.html">Log Out</a></li>
            <?php } ?>
              
             

            </ul>
          </div>
          <div>
            <ul>
            <?php if ($is_logged_in) { ?>
              <li><a href="home.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>">Home</a></li>
                <li><a href="about.html?id=<?php echo $id; ?>&firstname=<?php echo$first?>">About</a></li>
                <li><a href="menu.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>">Menu</a></li>
                
            <?php } ?>
            <?php if (!$is_logged_in) { ?>
              <li><a href="home.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="menu.php">Menu</a></li>
               
              
            <?php } ?>
               
                
            </ul>
          </div>
          
        </nav>
    </div>
</header>

<section class="about">
    <div class="container">
        <h2>Our Coffee Story</h2>
        <p>Coffee Cozy Café isn't just your typical coffee shop; it's a sanctuary for aficionados, a haven of inspiration, and a focal point for our vibrant community. From the meticulous selection of beans to the training of our skilled baristas, Coffee Cozy is dedicated to curating unparalleled experiences with every sip you take. Whether you're in search of a peaceful nook to lose yourself in a good book, catching up with old friends over a frothy latte, or powering through your workday with our unique blends, Coffee Cozy warmly welcomes you to your second home.</p>
        <p>Step inside and you'll be greeted by the enticing aroma of freshly brewed coffee and the comforting sight of friends and neighbors gathered around, sharing stories and laughter. Our commitment to excellence extends beyond our beverages; it's woven into every aspect of our café experience. From the moment you walk through our doors, you're enveloped in a warm, inviting atmosphere that feels like a warm embrace.</p>
        <p>Indulge your senses with our delectable array of freshly baked pastries, made with love and care each morning. From buttery croissants to decadent cakes, there's something to satisfy every craving. And of course, no visit to Coffee Cozy would be complete without exploring our extensive menu of coffee delights.

Embark on a journey of discovery as you explore the diverse flavors and aromas of our carefully curated selection of beans. From rich, earthy single-origin pour-overs to indulgent, creamy specialty drinks, there's always something new and exciting to tantalize your taste buds. Our knowledgeable baristas are always on hand to guide you through the menu and help you find your perfect brew.

But Coffee Cozy is more than just a place to enjoy great coffee and delicious treats; it's a place to connect, to unwind, and to feel a sense of belonging. Whether you're here to catch up with friends, meet new people, or simply enjoy a moment of solitude, you'll always find a warm welcome and a friendly face.

At Coffee Cozy, we believe that every cup tells a story, and every visit is an opportunity to create lasting memories. So come on in, take a seat, and savor the moment with us. Whether you're a seasoned coffee connoisseur or just starting your journey, you'll find a home at Coffee Cozy Café. Welcome home.</p>
    </div>
</section>

<footer>
    <div class="container">
        <div class="footer-social-icons">
            <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
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

</body>
</html>
