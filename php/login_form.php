<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
  
   

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

     

         $_SESSION['user_name'] = $row['name'];
          header('location:user_page.php');

      
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   
   <link rel="stylesheet" href="../.utils/css/login.css">
   <link rel="stylesheet" href="../.tils/css/header.css">

</head>
<body>
<header class="scroll">
          <nav class="headerWraper layout">
              <div class="logo">
                  <a href="../html/home.html"> <b>Gymbros</b> </a>
              </div>
              <div>
                  <ul class="nav">
                      <li><a href="../html/home.html" class="nav-link">Home</a></li>
                      <li><a class="nav-link"><i onclick="myFunction()" class="dropbtn fa-solid fa-cart-shopping nav-link"></i>
                        <div id="myDropdown" class="dropdown-content">
                          <p>Lorem</p>
                          <button class="go-to-chart">Checkout <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                      </a></li>
                  </ul>
              </div>
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password"  id ="myInput">
      <input type="checkbox" onclick="myFunction()">Show Password




      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>