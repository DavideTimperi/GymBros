function messageAlert(msg) {
    alert(String(msg));
}

function generateFooter() {
    let msg = "No muscles without patience! Coming soon!"
    document.getElementById("footer").innerHTML = `
      <div class="main-content">
        <div class="left box">
            <h2>About us</h2>
            <div class="content">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt omnis sequi veniam molestiae inventore quibusdam quaerat repudiandae ad temporibus explicabo, numquam porro ut aliquam provident non. Adipisci ad aliquam illo!</p>
              <div class="social">
                  <a><span class="fab fa-facebook-f" onclick="messageAlert('${msg}')"></span></a>
                  <a><span class="fab fa-twitter" onclick="messageAlert('${msg}')"></span></a>
                  <a><span class="fab fa-instagram" onclick="messageAlert('${msg}')"></span></a>
                  <a><span class="fab fa-youtube" onclick="messageAlert('${msg}')"></span></a>
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
    `;
  }
  
  generateFooter();