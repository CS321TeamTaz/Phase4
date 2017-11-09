// Global Variables
var carouselIndex = 0;
var timerId;

window.onload = rotate_carousel(carouselIndex);

function rotate_carousel(destination) {
    var i;
    var slides = document.getElementsByClassName("carousel_slide");
    var controls = document.getElementsByClassName("carousel_indicator");

    for(i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    for(i = 0; i < controls.length; i++) {
        controls[i].style.backgroundColor = "grey";
    }

    if(carouselIndex != destination) {
        carouselIndex = destination
    } else {
        carouselIndex++; 
    }
    
    if (carouselIndex > slides.length) {
        carouselIndex = 1;
    }
    
    console.log("destination: " + destination + ".     carousel index: " + carouselIndex);

    slides[carouselIndex-1].style.display = "block";
    controls[carouselIndex-1].style.backgroundColor = "rgb(155, 22, 29)";

    clearTimeout(timerId);
    timerId = setTimeout(rotate_carousel, 7000, carouselIndex);
}