/*
Show/Hide all the shipping part of the checkout
*/
$(document).ready(function() {
  $('#hide-check').change(function(){
    if(this.checked)
        $('#shipping').fadeOut('fast');
    else
        $('#shipping').fadeIn('fast');
  });

  $('#hide-check').change(function(){
    if(this.checked)
        $('#shipping').fadeOut('fast');
    else
        $('#shipping').fadeIn('fast');
  });
});
