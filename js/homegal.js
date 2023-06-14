var fullImgBox = document.getElementById("fullImgBox");
var fullImg = document.getElementById("fullImg");
var images = ["img/cls_1.jpg", "img/cls_2.jpg", "img/cls_3.jpg", "img/cls_4.jpg", "img/cls_6.jpg", "img/cls_7.jpg"];
var currentIndex = 0;

function openfullImg(pic){
    fullImgBox.style.display = "flex";
    fullImg.src = pic;
}

function closefullImg(){
    fullImgBox.style.display = "none";
    fullImg.src ="";    
}

function showPrevImg() {
    currentIndex--;
    if (currentIndex < 0) {
      currentIndex = images.length - 1;
    }
    fullImg.src = images[currentIndex];
    updateArrows();
  }
  
  function showNextImg() {
    currentIndex++;
    if (currentIndex >= images.length) {
      currentIndex = 0;
    }
    fullImg.src = images[currentIndex];
    updateArrows();
  }
  
  function updateArrows() {
    var prevArrow = document.getElementById("prev");
    var nextArrow = document.getElementById("next");
    
    if (images.length <= 1) {
      prevArrow.style.display = "none";
      nextArrow.style.display = "none";
    } else {
      prevArrow.style.display = "block";
      nextArrow.style.display = "block";
    }
  }
  
  document.getElementById("prev").addEventListener("click", showPrevImg);
  document.getElementById("next").addEventListener("click", showNextImg);
