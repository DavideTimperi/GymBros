<!DOCTYPE html>

<html lang="en">
    <head>        
        <title>Gymbros</title>
       
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../.utils/css/header.css"> 
        <link rel="stylesheet" href="../.utils/css/shop.css">
        <link rel="stylesheet" href="../.utils/css/footer.css"> 
        <link rel="icon" href="../.utils/images/logo_icon.ico" type="image/x-icon">
    
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/248ee2f927.js" crossorigin="anonymous"></script>
      </head>

    <body class="contianer">
      <a href="#" class="scroll-up">
          <i class="fa-solid fa-arrow-up fa-lg"></i>
      </a>
      <!-- header -->
      <header class="scroll">
          <nav class="headerWraper layout">
              <div class="logo">
                  <a href="home.html"> <b>Gymbros</b> </a>
              </div>
              <div>
                  <ul class="nav">
                      <li><a href="home.html" class="nav-link">Home</a></li>
                      <li><a class="nav-link"><i onclick="myFunction()" class="dropbtn fa-solid fa-cart-shopping nav-link"></i>
                        <div id="myDropdown" class="dropdown-content">
                          <p>Lorem</p>
                          <button class="go-to-chart">Checkout <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                      </a></li>
                  </ul>
              </div>

              <!-- profile -->
        
              <div id="navbar">
                <a href="#" class="menu-bars" id="show-menu">
                    <i class="fa-solid fa-user fa-2xs nav-link"></i>
                </a>
            </div>

            <nav id="nav-menu">
                <ul class="nav-menu-items">
                    <div id="navbar-toggle">
                        <a href="#" class="menu-bars" id="hide-menu">
                            <i class="fa-solid fa-user fa-sm nav-icon"></i>
                        </a>
                        <h1>Profile</h1>
                    </div>
                    <hr /> <!-- line -->
                    <div class="nav-section">
                        <li class="nav-text">
                            <a href="login.html"><i class="fa-solid fa-right-to-bracket nav-icon"></i>Login</a>
                        </li>
                        <li class="nav-text">
                            <a href="login.html"><i class="fas fa-fire nav-icon"></i>Register</a>
                        </li>
                    </div>
                </ul>
            </nav>

              <div class="menu">
                  <i class="bx bx-menu bx-md"></i>
              </div>
          </nav>
      </header>

      <!-- Shop -->   
      <div class="title-shop">
        <h2>SHOP</h2>
      </div>
      <main>            
        <h2>ALL PRODUCTS</h2>
        <div class="shop">
          <div class="grid-container">
            <!-- All inside this is generated with shop.js -->
          </div>
          
        </div>  
        <button class="load-more">Load More</button>
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
        
    <!-- js -->    
    <script src="../js/main.js"></script>
    <script src="../js/shop.js"></script>
  </body>
</html>