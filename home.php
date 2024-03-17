<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coffee crozy</title>
<link rel="icon" type="image/png" href="favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-abc123==" crossorigin="anonymous" />


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
    color: #fff;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  .acontainer{
    background-color: #fff;
    color: #222;
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
    background-image: url('back.jpg');
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
  .specials {
    background-color: #fff;
    padding: 80px 0;
  }

  .specials h2 {
    font-size: 36px;
    margin-bottom: 20px;
  }

  .specials p {
    font-size: 18px;
    margin-bottom: 40px;
  }

  .specials-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    color: #333;
  }

  .specials-item {
    width: 300px;
    padding: 20px;
    margin: 10px;
    background-color: #f9f9f9;
    border-radius: 5px;
    text-align: center;
  }


  .specials-item h3 {
    font-size: 24px;
    margin-bottom: 10px;
  }

  
  .gallery {
    background-color: #fff;
    padding: 80px 0;
  }

  .gallery h2 {
    font-size: 36px;
    margin-bottom: 20px;
    text-align: center;
  }

  .gallery-images {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .gallery-images img {
    width: 300px;
    margin: 10px;
    border-radius: 5px;
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



<section class="hero">
  <div class="container">
  <?php if ($is_logged_in) { ?>
    <h2>Welcome to Coffee Cozy, <?php echo $first; ?></h2>
<?php } ?>

       <?php if(!$is_logged_in) { ?>
      <h2>Welcome to Coffee Cozy</h2>
      <?php } 
      ?>
      <p>Your favorite destination for coffee, food, and more.</p>
      <a href="menu.php?id=<?php echo $id; ?>&firstname=<?php echo$first?>" class="btn">View Menu</a>
  </div>
</section>



<section id="specials" class="specials">
  <div class="container">
      <h2>Special Offers and Promotions</h2>
      <p>Check out our latest specials and promotions to enjoy great discounts and deals!</p>
      <div class="specials-list">
          <div class="specials-item">
              <h3>Special Offer 01</h3>
              <p>Enjoy a 20% discount on all espresso beverages this weekend only!</p>
          </div>
          <div class="specials-item">
              <h3>Special Offer 02</h3>
              <p>Buy one, get one free on pastries every Friday!</p>
          </div>
          
      </div>
  </div>
</section>

<section id="gallery" class="gallery">
  <div class="acontainer">
      <h2>Gallery</h2>
      <div class="gallery-images">
          <img src="img/gallery01.jpg" alt="Image1">
          <img src="img/gallery02.jpg" alt="Image2">
          <img src="img/gallery03.jpg" alt="Image3">
          <img src="img/gallery04.jpg" alt="Image4">
          <img src="img/gallery05.jpg" alt="Image5">
          <img src="img/gallery06.jpg" alt="Image6">
          
      </div>
  </div>
</section>

<section id="about" class="about">
    <div class="box">
        <h2>About Us</h2>
        <p  style="text-align: justify;">Coffee Cozy Café is more than just a place to grab your morning pick-me-up; it's a sanctuary for coffee lovers, a hub of creativity, and a gathering spot for our vibrant community. 
          From meticulously sourced beans to expertly trained baristas, Coffee Cozy is committed to crafting unforgettable experiences with every sip. 
          Whether you're seeking a quiet corner to escape with a book, catching up with friends over a latte, or fueling your workday with our signature blends, Coffee Cozy is your home away from home. 
          With mouthwatering pastries made fresh daily and a warm, welcoming atmosphere, every visit to Bean Bliss is a moment of joy and comfort.
          Coffee Cozy invites you on a journey of discovery through the rich tapestry of flavors that coffee has to offer. 
          From single-origin pour-overs to indulgent specialty drinks, there's always something new to delight your senses at our café. 
          Our dedication to excellence extends to every aspect of your experience, ensuring that each cup is a celebration of life's simple pleasures. 
          So come on in, take a seat, and savor the moment with us at Coffee Cozy Café, where every cup tells a story and every visit feels like coming home.</p>
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



</body>
</html>
