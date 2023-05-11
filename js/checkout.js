/*
Show/Hide all the shipping part of the checkout
*/
var profile_viewer_uid = [...localStorage.data];
console.log(profile_viewer_uid)

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

    $.ajax({
      url: "../php/prova_decode.php",
      type: "POST",
      data: profile_viewer_uid
    })
    setTimeout(localStorage.clear(), 5000);
  });
};


reset();
