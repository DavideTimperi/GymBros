<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Cart</title>

  <link rel="stylesheet" href="../.utils/css/header.css">
  <link rel="stylesheet" href="../.utils/css/cart.css">
   <link rel="stylesheet" href="../.utils/css/footer.css">
  <link rel="icon" href="../.utils/images/logo_icon.ico" type="image/x-icon">

  
  <script src="../js/jquery-3.6.4.min.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/248ee2f927.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="navbar">
    <a href="../html/shop.html">
      <h2>Clothing Store</h2>
    </a>

    <a href="../html/cart.html">
      <div class="cart">
        <i class="fa-solid fa-shopping-cart"></i>
        <div id="cartAmount" class="cartAmount">0</div>
      </div>
    </a>

  </div>

  <div id="label" class="text-center"></div>

  <div class="shopping-cart" id="shopping-cart"></div>
</body>
<script src="../js/Data.js"></script>
<script src="../js/cart.js"></script>

</html>