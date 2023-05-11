/*
Show/Hide all the shipping part of the checkout
*/
var profile_viewer_uid = localStorage.data;
console.log(profile_viewer_uid);
document.getElementById('cart_hidden').value = profile_viewer_uid;

let reset = () => {
  $('#hide-check').change(function(){
    if(this.checked) {       
      $('#shipping :input').val('')
      $('#shipping').fadeOut('fast');
    }
    else
      $('#shipping').fadeIn('fast');
  });

  $('.redirect-button').click(() => {
    localStorage.clear()
  });
};


reset();
