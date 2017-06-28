$(document).ready(function() {
    $('.gw-container').addClass('container-loaded');

    window.sr = ScrollReveal({ reset: false });
    sr.reveal('.reveal-hero', { duration: 600 }, 250);
    sr.reveal('.reveal-box1', { duration: 600 }, 250);
    sr.reveal('.reveal-projects', { duration: 600 }, 250);
    sr.reveal('.reveal-banner', { duration: 600 }, 250);
    sr.reveal('.reveal-contact', { duration: 600 }, 250);
    sr.reveal('.reveal', { duration: 600 });

    $(document).scroll(function () {
        var scroll = $(this).scrollTop();
        var topDist = $(".go-navbar").position();
        if (scroll > topDist.top + 60) {
          $('.go-navbar').delay(4000).addClass('go-nav-down');
      } else {
          $('.go-navbar').removeClass('go-nav-down');
      }
  });
});


function goTo(id){
    var a = 110;
    if (id == 'box3') {a = 130}
        closeNav();
    $('html, body').animate({
        scrollTop: $(id).offset().top - a
    }, 1200);
}

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


function openNav() {
    $("#myNav").css("width","100%");
}

function closeNav() {
    $("#myNav").css("width","0%");
}

new WOW().init();