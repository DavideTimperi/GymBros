// ----- img slider functions -----

$(document).ready(function(){

    var slider = $(".gallery");
    var count = $(".gallery section").children().length;
    var width = count *100;
    slider.css("width", width + "%");

    var slider2 = $(".gallery2");
    var count2 = $(".gallery2 section").children().length;
    var width2 = count2 *100;
    slider2.css("width", width2 + "%")

    var slider3 = $(".gallery3");
    var count3 = $(".gallery3 section").children().length;
    var width3 = count3 *100;
    slider3.css("width", width3 + "%");

    $(".gallery .img:last").insertBefore(".gallery .img:first");
    slider.css("margin-left", "-" + 100 + "%");

    $(".gallery2 .img2:last").insertBefore(".gallery2 .img2:first");
    slider2.css("margin-left", "-" + 100 + "%");

    $(".gallery3 .img3:last").insertBefore(".gallery3 .img3:first");
    slider3.css("margin-left", "-" + 100 + "%");

    function move(){

        slider.animate({
            marginLeft: "-" + 200 + "%"
        }, 700, function(){
            $(".gallery .img:first").insertAfter(".gallery .img:last");
            slider.css("margin-left", "-" + 100 + "%");
        });

        slider2.animate({
            marginLeft: "-" + 200 + "%"
        }, 700, function(){
            $(".gallery2 .img2:first").insertAfter(".gallery2 .img2:last");
            slider2.css("margin-left", "-" + 100 + "%");
        });

        slider3.animate({
            marginLeft: "-" + 200 + "%"
        }, 700, function(){
            $(".gallery3 .img3:first").insertAfter(".gallery3 .img3:last");
            slider3.css("margin-left", "-" + 100 + "%");
        });
    }

    function autoplay(){
        i = setInterval(function(){
            move();
        }, 4000);
    }

    autoplay();
    
});


// if we have a screen with less than 900px ( @media(max-width: 900px) from staff.css ) we will see the page in column, 
// so to prevent carousels 2 and 3 from not being separated by a text paragraph I used the following function:

$(window).on('load resize', function() { //Fires when window is loaded or resized
    var div1 = $('#div2');
    var div2 = $('#div1');
    var wrapper = $('.carousel-right');
  
    if ($(window).width() < 900) {
      wrapper.prepend(div1).append(div2); // move div 1 to start & div2 to end
    } else {
      wrapper.prepend(div2).append(div1); // move div 2 to start & div 1 to end
    }
});