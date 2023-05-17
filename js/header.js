function generateHeader() {
    document.getElementById("header").innerHTML = `
    <a href="#" class="scroll-up">
        <i class="bx bx-chevron-up bx-sm"></i>
    </a>
    <nav class="headerWraper">
    <div class="logo">
        <a href="../html/home.html"> <b>Gymbros</b> </a>
    </div>
    <div>
        <ul class="nav">
            <li><a href="../html/home.html" class="nav-link">Home</a></li>
            <li><a href="../html/shop.html" class="nav-link link-active">Shop</a></li>
            <li><a href="../html/staff.html" class="nav-link">Staff</a></li>
        </ul>
    </div>

    <div>

      <ul class="right">
            <a href="../php/user_page.php" class="login-icon"><i class="fa-solid fa-user nav-link"></i></a>

            <a href="../html/cart.html" class="nav-link">
                <div class="cart nav-link">
                    <i class="fa-solid fa-shopping-cart"></i>
                    <div id="cartAmount" class="cartAmount">0</div>
                </div>
            </a>

            <div class="menu">
                <i class="bx bx-menu bx-md"></i>
            </div>
      </ul>

    </div>
</nav>
    `;
  }
  
  generateHeader();