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

   
   <link rel="stylesheet" href="../.utils/css/login.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi,</h3>
     <h1>welcome   <span>  <?php  echo  $_SESSION['name'] ?></h1>
      <p>this is an user page</p>
      <a href="../html/shop.html" class="btn">shop</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>