// // When the user scrolls the page, execute myFunction
// window.onscroll = function() {myFunction()};
//
// // Get the navbar
// var navbar = document.getElementById("navbar");
//
// // Get the offset position of the navbar
// var sticky = navbar.offsetTop;
//
// // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
// function myFunction() {
//   if (window.pageYOffset >= sticky) {
//     navbar.classList.remove("sticky")
//   } else {
//     navbar.classList.add("sticky");
//   }
// }

var modal = document.querySelector(".order");
var openModal = document.querySelector("#buyItem");
var closeModal = document.querySelector(".closeModal");
var buy = document.querySelector(".buy");

openModal.addEventListener("click", function(){
  modal.style.display = "block";
  buy.style.display = "none";
},false);

closeModal.addEventListener("click", function(){
  modal.style.display = "none";
    buy.style.display = "block";
},false);

window.addEventListener("click", function(event){
  if (event.target == modal) {
    modal.style.display = "none";
  }
})
