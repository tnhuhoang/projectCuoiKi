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