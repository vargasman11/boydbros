/* ========================================================================== */
/*                 THIS IS THE CUSTOM CODE TO USE WITH STICKY                 */
/* ========================================================================== */

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");
var navbarMobile = document.getElementById("navbarMobile");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// get top logo
var logo = document.getElementById('logo');

// get the jumbotron id for offset purposes
var jumbotron = document.getElementById('jumbotronID');


// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    // logo.style.display = "none";
    navbar.classList.add("sticky");
    navbarMobile.classList.add("sticky");
    jumbotron.style.marginTop = navbar.offsetTop + 50;
  
  } else {
    // logo.style.display = "block";
    navbar.classList.remove("sticky");
    navbarMobile.classList.remove("sticky");
    jumbotron.style.marginTop = "0px";

  }
}



