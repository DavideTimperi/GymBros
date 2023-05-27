<!-- a simple script to show/hide password on click -->
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
      x.type = "text";
  } else {
      x.type = "password";
  }
  var y = document.getElementById("myInput2");
  if(y.type ==="password"){
      y.type="text";
  }
  else{
      y.type="password";
  }
}
</script>

<?php

@include 'config.php';

if(isset($_POST['submit'])){
   
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']); //md5 is the crypto of the password
   

   $select = " SELECT * FROM user_form WHERE email = '$email'  ";

   $result=mysqli_query($conn, $select);
   
   if(mysqli_num_rows($result) > 0 ){
      $error[] = 'email already used!';
   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password) VALUES('$name','$email','$pass')";
         mysqli_query($conn, $insert);
        header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   
   <link rel="stylesheet" href="../.utils/css/login.css">
   <link rel="icon" href="../.utils/images/logo_icon.ico" type="image/x-icon">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password" id="myInput">
      <input type="password" name="cpassword" required placeholder="confirm your password" id="myInput2">
      <input type="checkbox" onclick="myFunction()">Show Password
     
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
      <p>or <a href="../html/home.html">return home</a></p>
   </form>

</div>

</body>
</html>