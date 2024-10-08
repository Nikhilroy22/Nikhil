
//alert('pagpl');
var modal = document.getElementById("myModal");

var btn = document.getElementById("openmenu");

var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
const body = document.body;
btn.onclick = function() {
  modal.style.display = "block";
  body.classList.toggle('no-scroll');
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  body.classList.remove('no-scroll');
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    body.classList.remove('no-scroll');
  }
}