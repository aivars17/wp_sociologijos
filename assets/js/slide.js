var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.opacity = 0.8;  
  }
  x[slideIndex-1].style.opacity = 1; 
  var b = document.getElementsByClassName("team-slide-title");
  if (n > b.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = b.length}
  for (i = 0; i < b.length; i++) {
     b[i].style.display = 'none';  
  }
  b[slideIndex-1].style.display = 'block';  
}

function slideComments(n) {
  showComments(slideIndex += n);
}

function showComments(n) {
  var i;
  var x = document.getElementsByClassName("slide-comments");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = 'none';  
  }
  x[slideIndex-1].style.display = 'block'; 
}