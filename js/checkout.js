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
    var profile_viewer_uid = localStorage.data;
    $.ajax({
      url: "prova_decode.php",
      method: "POST",
      data: profile_viewer_uid
    })
    localStorage.clear()
  });
};


reset();
