/*initialized the number to 1 
for slide number 1*/
let slideIndex = 1; 

//display the first slide
showSlides(slideIndex);

//update the slide index by adding the number
function plusSlides(n) {
  showSlides(slideIndex += n);
}

//set the slide index with specifix value
//call the showslides function with the new slide index
function currentSlide(n) {
  showSlides(slideIndex = n);
}

//display the slide with corresponding number
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  //hides slides by setting display to none and 

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
    //remove "active class" from the corresponding dot
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  //update caption text of the slideshow
  captionText.innerHTML = dots[slideIndex-1].alt;
}
