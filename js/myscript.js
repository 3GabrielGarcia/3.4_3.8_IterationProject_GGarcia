//carousel 1

let slideIndex = 1;


document.addEventListener("DOMContentLoaded", function() {
    showSlides(slideIndex);
});

function plusSlides1(n) {
  showSlides(slideIndex += n);
}

function currentSlide1(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides1");
  let dots = document.getElementsByClassName("dot1");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}

// setInterval(() => { plusSlides1(1) }, 4000);


// carousel 2

document.addEventListener("DOMContentLoaded", function() {
    showSlides2(slideIndex);
});

function plusSlides2(n) {
  showSlides2(slideIndex += n);
}

function currentSlide2(n) {
  showSlide2(slideIndex = n);
}

function showSlides2(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides2");
  let dots = document.getElementsByClassName("dot2");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}


// carousel 3

document.addEventListener("DOMContentLoaded", function() {
    showSlides3(slideIndex);
});

function plusSlides3(n) {
  showSlides3(slideIndex += n);
}

function currentSlide3(n) {
  showSlide3(slideIndex = n);
}

function showSlides3(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides3");
  let dots = document.getElementsByClassName("dot3");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}
