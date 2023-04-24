/*
Generate html from php database
*/
window.onload = function() {
  const rows = 12;
  const manipulate = $(".grid-container")
  for (let i=0; i<rows; i++){
    let linked = "home.html";
      let txt = "product_" + String(i+1)
      let product_price = $("<i/>", {
          text: " " + String(i),
          class: "fa-solid fa-euro-sign",
      });
      let img = $("<img />", {
          src: "../.utils/images/logo.png",
          width: "100%",
      });
      let to_product = $('<a>',{
        href: linked,
        append: img
     });
      let button = $("<button/>", {
          class: "button-add fa-solid fa-cart-plus",
          onclick: "changeIcon(this);"
      });
      let br = document.createElement("br")
      let product_name = $("<p/>", {
          text: txt,
      })


      let div = $("<div/>", {
          class: "card",      // ('class' is still better in quotes)      // Finally, append to any selector
      }); // << no need to do anything here as we defined the properties internally.
      let div_grid = $("<div/>", {
          class: "grid-item",      // ('class' is still better in quotes)      // Finally, append to any selector
      });

      div.append([to_product, product_name, br, product_price, br, button])
      div_grid.append(div);
      manipulate.append(div_grid)
  }
}

/*
Load more button
*/
$(document).ready(function(){
  $(".load-more").click(function(){
     $(".grid-item").fadeIn();
     $(this).fadeOut();
  });
});


/*
Show/hid checkout
*/
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

/*
Function for the add-to-cart visual change
*/
function changeIcon(_this) {
    /*
        This code do:
        -disable button
        -change bg color and txt color of the 
          add to cart button
        -return to original
        -enable button again
    */
    let timeout = 3000; //3 s    
    let actual_bg_color = _this.style.backgroundColor;
    let actual_txt_color = _this.style.color;
    let bg_color = "rgb(0, 150, 0)";
    let txt_color = "#FFFFFF"
    let check_icon = 'fa-check'
    let cart_icon = 'fa-cart-plus'

    _this.enable = false


    _this.classList.add(check_icon)
    _this.classList.remove(cart_icon)


    _this.style.backgroundColor = bg_color;
    _this.style.color = txt_color;
    setTimeout(
        () => {            

            _this.classList.add(cart_icon)
            _this.classList.remove(check_icon)
            _this.style.backgroundColor = actual_bg_color;
            _this.style.color = actual_txt_color;
           
        }
    , timeout);
    _this.enable =true
}

//PUT IN THE HEADER
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}