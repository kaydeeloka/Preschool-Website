//declare variables for container box and image 
var fullImgBox = document.getElementById("fullImgBox");
var fullImg = document.getElementById("fullImg");
//array that link to the image to be display
var images = ["img/event_1.jpg", "img/event_2.jpg", "img/event_3.jpg", "img/event_4.jpg", "img/event_1.jpg", "img/event_6.jpg", "img/event_7.jpg", "img/cls_2.jpg", "img/event_8.jpg"];
var currentIndex = 0;

//function when image is clicked, 
//it will display the image full size
function openfullImg(pic){
    fullImgBox.style.display = "flex";
    fullImg.src = pic;
}

//function to close the full-img box
function closefullImg(){
    fullImgBox.style.display = "none";
    fullImg.src ="";    
}

//function to show previous image when the previous arrow is clicked
function showPrevImg() {
    currentIndex--;
    if (currentIndex < 0) {
      currentIndex = images.length - 1;
    }
      //update the image
    fullImg.src = images[currentIndex];

  }
  
  //function to show next image when the next arrow is clicked
  function showNextImg() {
    currentIndex++;
    if (currentIndex >= images.length) {
      currentIndex = 0;
    }
    //update the image
    fullImg.src = images[currentIndex];
  }
  
  //call the function to move the image after clicked
  document.getElementById("prev").addEventListener("click", showPrevImg);
  document.getElementById("next").addEventListener("click", showNextImg);
