/*
Generate html from php database
*/
window.onload = function() {
  const rows = 0;
  const title = $("<h3/>", {
    text: "Cart"
  })
  const manipulate = $(".product-summary").append([title])
  let total = 0;
  let linked
  let div
  let txt
  let go_to_shop
  if (rows > 0) {
      for (let i=0; i<rows; i++){
        
        txt = "ITEM IMAGE ------ ITEM NAME ------- QNTITY ------ PRICE TOTAL "
        div = $("<div/>", {
          text: txt,
          class: "summary",     
        }); 
        
        manipulate.append(div)

      } 
      manipulate.append($("<hr/>").attr('style', 'background-color:rgb(28, 28, 28, 0.8) !important;'))       
      manipulate.append(total)
  }
  else {
    linked = "shop.html";
    let empty_cart = $("<div/>", {
      text: "Your cart is empty",
      align: "center",
    }); 
    go_to_shop = $("<button/>", {
      text: "go to shop", 
      class: "redirect-button",
    }); 
    let link_anchor = $('<a>',{
      href: linked,
      append: go_to_shop
   });
    manipulate.append([empty_cart, link_anchor])
  }

}

$(document).ready(function() {
  $('#hide-check').change(function(){
    if(this.checked)
        $('#shipping').fadeOut('fast');
    else
        $('#shipping').fadeIn('fast');
  });
});
