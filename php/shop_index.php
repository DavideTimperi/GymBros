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
  <footer class="footer" id="footer">
  </footer>
</body>
<script src="../js/Data.js"></script>
<script src="../js/shop.js"></script>
<script src="../js/main.js"></script>
<script src="../js/footer.js"></script>

</html>
