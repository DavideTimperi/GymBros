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


  
   <link rel="stylesheet" href="../.utils/css/home.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <script src="../js/jquery-3.6.4.min.js" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/248ee2f927.js" crossorigin="anonymous"></script>

   

</head>

<!--<body background="../.utils/images/pale.png">-->

<body style="
background-image: url('../.utils/images/yoga.jpg');
    background-repeat: repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    background-color: rgba(0, 0, 0, 0.7) !important; ">
   
   <div class=" p-3 container-fluid container text-center  ">

      <div class=" p-3 container-fluid container text-center ">
      <h2>HI, </h2>
      <h1 >WELCOME <span class="badge text-bg-danger">  <?php  echo  $_SESSION['name'] ?></span></h1>

   </div>

</div>






<!--prova card -->



<div class="container text-center " >
  <div class="row">
    <div class="col">

         <!--prima card-->
         <a href="../html/shop.html" class="btn "><div  style="width: 18rem;">
            <img src="../.utils/images/shop_grigio.png" class="card-img-top" alt="shop">
            <div class="card-body">
               <h5 class="card-title"><span class="badge text-bg-dark">SHOP</span></h5>
              
            </div>
            
            
         </div></a>
      </div>



   <div class="col">
      <!--seconda card-->

      <a href="checkout.php" class="btn"><div  style="width: 18rem;">
  <img src="../.utils/images/payment_grigio.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title "><span class="badge text-bg-dark"> CHECKOUT</span></h5>
    
  </div>
 
  
</div></a>
    </div>




    <div class="col">
      <!--terza card-->
      <a href="logout.php" class="btn  " >
         <div class=" pippo" style="width: 18rem;">
            <img src="../.utils/images/logout_grigio.png" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title"><span class="badge text-bg-dark">LOGOUT</span></h5>
               
            </div>
         </div></a>
   </div>

  </div>
</div>



<!--<img src="../.utils/images/yoga.jpg" class="img-fluid" alt="...">
-->
  
  



<script>
      $('.pippo').click(() => {
         localStorage.clear()
      });
   </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>





</body>


</html>