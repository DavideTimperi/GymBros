<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name = "viewport" content = "width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no">
  
  <title>Shop</title>

  <link rel="stylesheet" href="../.utils/css/header.css">
  <link rel="stylesheet" href="../.utils/css/shop.css">
  <link rel="stylesheet" href="../.utils/css/footer.css">

  <link rel="icon" href="../.utils/images/logo_icon.ico" type="image/x-icon"> 
  
  <script src="../js/jquery-3.6.4.min.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/248ee2f927.js" crossorigin="anonymous"></script>
</head>

<body>

<!-- first header
  <header>
    <div class="navbar">
      <a href="home.html">
        <h2>Gymbros</h2>
      </a>
  
      <a href="../html/cart.html">
        <div class="cart">
          <i class="fa-solid fa-shopping-cart"></i>
          <div id="cartAmount" class="cartAmount">0</div>
        </div>
      </a>
  
    </div>
  </header>
-->

<header class="scroll">
  <nav class="headerWraper layout">
      <div class="logo">
          <a href="../html/home.html"> <b>Gymbros</b> </a>
      </div>
      <div>
          <ul class="nav">
              <li><a href="../html/home.html" class="nav-link">Home</a></li>
              <li><a href="shop.php" class="nav-link link-active">Shop</a></li>
              <li><a href="../html/staff.html" class="nav-link">Staff</a></li>
              <li><a href="../php/login_form.php"><i class="fa-solid fa-user nav-link"></i></a></li>
              <a href="../html/cart.html">
                <div class="cart">
                  <i class="fa-solid fa-shopping-cart"></i>
                  <div id="cartAmount" class="cartAmount">0</div>
                </div>
              </a>
          </ul>
      </div>

      <div class="menu">
          <i class="bx bx-menu bx-md"></i>
      </div>
  </nav>
</header>


  <div class="title-shop">
    <h2>SHOP</h2>
  </div>

  <main>            
    <h2 id="list">ALL PRODUCTS</h2>
    <div class="shop" id="shop">
      <!--items attached with shop.js-->
    </div>
    <button class="load-more">Load more</button>
  </main>

  <!-- footer -->
  <footer class="footer">
    <div class="main-content">
      <div class="left box">
          <h2>About us</h2>
          <div class="content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt omnis sequi veniam molestiae inventore quibusdam quaerat repudiandae ad temporibus explicabo, numquam porro ut aliquam provident non. Adipisci ad aliquam illo!</p>
            <div class="social">
                <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                <a href="#twitter"><span class="fab fa-twitter"></span></a>
                <a href="#instagram"><span class="fab fa-instagram"></span></a>
                <a href="#youtube"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
      </div>
    <div class="center box">
        <h2>Address</h2>
        <div class="content">
          <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Rome, Italy</span>
          </div>
          <div class="phone">
              <span class="fas fa-phone"></span>
              <span class="text">+39 000 000 0000</span>
          </div>
          <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">help@gymbros.com</span>
          </div>
        </div>
    </div>
    <div class="right box">
        <h2>Contact us</h2>
        <div class="content">
        <form action="#">
            <div class="email">
            <div class="text">Email *</div>
            <input type="email" required>
            </div>
            <div class="msg">
            <div class="text">Message *</div>
            <textarea rows="2" cols="25" required></textarea>
            </div>
            <div class="btn">
              <button type="submit" >Send</button>
            </div>
        </form>
        </div>
    </div>
    </div>
    <div class="bottom">
    <p><span class="far fa-copyright"></span><span> Copyrigth 3050 by nobody. All rights reserved.</span></p>
    </div>
  </footer>
</body>
<script src="../js/Data.js"></script>
<script src="../js/shop.js"></script>
<script src="../js/main.js"></script>

</html>
