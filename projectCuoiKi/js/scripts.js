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
    eSearchBox.style.right = "-999px";
    eSearchBox.style.transition = "right 0.3s";
}
// // toggle side slide search