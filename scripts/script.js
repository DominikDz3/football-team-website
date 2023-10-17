// sticky navbar 

window.onscroll = () => {navbarScroll()};

function navbarScroll() {
    var header = document.getElementById("js-navbar");
    var placeholder = document.getElementById("js-navbar-placeholder")
    var sticky = header.offsetTop;

  if (window.pageYOffset > sticky) {
    header.classList.add("fixed-top");
    placeholder.style.display = "block";
  } else {
    header.classList.remove("fixed-top");
    placeholder.style.display = "none";
  }
}
