function initialElement(){
    var eSearchBox = document.getElementById("h-slide-search");
    eSearchBox.style.display = "block";
    var searchWidth = eSearchBox.offsetWidth;
    eSearchBox.style.right = "-"+searchWidth+"px";
}

// scroll nav bar
var prevScroll = window.scrollY;
window.onscroll = function(){
    var navHeight = document.getElementById("h-main-navbar").offsetHeight;
    var pageHeight = innerHeight;
    var currentScroll = window.scrollY;
    if(currentScroll > pageHeight){
        document.getElementById("h-main-navbar").style.position = "fixed";
        if(prevScroll < currentScroll){
            document.getElementById("h-main-navbar").style.top = "-"+navHeight+"px";
            document.getElementById("h-main-navbar").style.transition = "0s";
        }else{
            document.getElementById("h-main-navbar").style.top = "0px";
            document.getElementById("h-main-navbar").style.transition = "0.5s";
        }
        
    
    }else{
        document.getElementById("h-main-navbar").style.position = "static";
    }
    prevScroll = currentScroll;
}

//// scroll navbar

// toggle side slide search
function toggleSearch(){
    initialElement();
    var eSearchBox = document.getElementById("h-slide-search");
    var searchWidth = eSearchBox.offsetWidth;
    eSearchBox.style.right = "0px";
    eSearchBox.style.transition = "right 0.3s";
}

function closeSearchBox(){
    var eSearchBox = document.getElementById("h-slide-search");
    eSearchBox.style.right = "-100%";
    eSearchBox.style.transition = "right 0.5s";
    //disappearSearchBox();
}

// function disappearSearchBox(){
//     var eSearchBox = document.getElementById("h-slide-search");
//     eSearchBox.style.display = "none";
// }
// // toggle side slide search

// forum slide

$(document).ready(function(){
    $('.h-forum-slide').slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow : $(".h-slide-next"),
  prevArrow: $(".h-slide-prev"),
  responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
});
  
});
// // forum slides
