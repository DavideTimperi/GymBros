<?php

@include 'config.php';

session_start();


//controllo per vedere se sei loggato
if(!isset($_SESSION['email'])){
   header('location:login_form.php');}

?>

<!DOCTYPE html>

<html lang="en">
   <head>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>user page</title>

      <link rel="icon" href="../.utils/images/logo_icon.ico" type="image/x-icon">
      <link rel="stylesheet" href="../.utils/css/home.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

      <script src="../js/jquery-3.6.4.min.js" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/248ee2f927.js" crossorigin="anonymous"></script>

   </head>

   <style>
      body {
         height: 100vh;

         background-image: url('../.utils/images/yoga.jpg');
         background-repeat: repeat;
         background-attachment: fixed;
         background-size: cover;
         background-position: center;
         background-blend-mode: multiply;
         background-color: rgba(0, 0, 0, 0.7) !important; 
      }

      .row {
         display: flex;
         justify-content: center;
         vertical-align: middle;
      }

      .card-body {
         max-width: 250px;
      }

      @media (max-width: 750px){
         .row {
            flex-direction: column;
         }
      }

   </style>
   <!--<body background="../.utils/images/pale.png">-->

   <body>     
      <div class=" p-3 container-fluid container text-center  ">
         <div class=" p-3 container-fluid container text-center ">
            <h2><span class="badge text-light">HI,</span> </h2>
            <h1 ><span class="badge text-light">WELCOME </span><span class="badge text-bg-danger">  <?php  echo  $_SESSION['name'] ?></span></h1>
         </div>
      </div>

      <div class="container text-center " >
         <div class="row">

            <!--prima card-->
            <div class="col">
               <a href="../html/shop.html" class="btn ">
                  <div class="card-body">
                     <img src="../.utils/images/shop_grigio.png" class="card-img-top" alt="shop">
                     <h5 class="card-title"><span class="badge text-light">SHOP</span></h5>
                  </div>
               </a>
            </div>

            <!-- fare controllo per vedere se è vuoto<input id="cart_hidden" type="text" name="cart_hidden">-->

            <!--seconda card-->
            <div class="col">
               <a href="../html/cart.html" class="btn">
                  <div class="card-body">
                     <img src="../.utils/images/icona_shopping-cart.png" class="card-img-top" alt="...">
                     <h5 class="card-title "><span class="badge text-light"> CART</span></h5>
                  </div>
               </a>
            </div>

            <!--terza card-->
            <div class="col">
               <a href="logout.php" class="btn  " >
                  <div class="card-body">
                     <img src="../.utils/images/logout_grigio.png" class="card-img-top" alt="...">
                     <h5 class="card-title"><span class="badge text-light">LOGOUT</span></h5>
                  </div>
               </a>
            </div>

         </div>
      </div>

      <!--<img src="../.utils/images/yoga.jpg" class="img-fluid" alt="...">-->
   </body>

   <script>
      $('.pippo').click(() => {
         localStorage.clear()
      });
   </script>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>