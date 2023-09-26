function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "+";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "-";
      moreText.style.display = "inline";
    }
  }
  function myFunction2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("myBtn2");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "+";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "-";
      moreText.style.display = "inline";
    }
  }
  function myFunction3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("myBtn3");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "+";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "-";
      moreText.style.display = "inline";
    }
  }
  function myFunction4() {
    var dots = document.getElementById("dots4");
    var moreText = document.getElementById("more4");
    var btnText = document.getElementById("myBtn4");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "+";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "-";
      moreText.style.display = "inline";
    }
  }
  function myFunction5() {
    var dots = document.getElementById("dots5");
    var moreText = document.getElementById("more5");
    var btnText = document.getElementById("myBtn5");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "+";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "-";
      moreText.style.display = "inline";
    }
  }

///////////////////////////////////////////////////////////////////////////////////////////////////


  let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}