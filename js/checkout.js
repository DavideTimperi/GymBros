/*
Show/Hide all the shipping part of the checkout
*/
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
