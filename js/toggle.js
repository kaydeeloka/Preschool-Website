// define all UI variable
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');
const navLinks = document.querySelectorAll('.site-navbar a');

// load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  // nav links click event
  navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
  var navToggler = document.querySelector('.nav-toggler');
  var navMenu = document.querySelector('.site-navbar ul');
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
  var gallerySection = document.getElementById("gallerySection");
  gallerySection.style.display = (gallerySection.style.display === "none") ? "block" : "none";
}

// navLinkClick function
function navLinkClick() {
  var navMenu = document.querySelector('.site-navbar ul');
  if (navMenu.classList.contains('open')) {
    var navToggler = document.querySelector('.nav-toggler');
    navToggler.click();
    showGallery();
  }
}

function showGallery() {
  var gallerySection = document.getElementById("gallerySection");
  gallerySection.style.display = "block";
}
