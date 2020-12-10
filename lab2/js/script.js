console.log("designed by https://facebook.com/codefarmers");

window.onscroll = function () {stickyDiv()};

var stickydiv = document.getElementById("left-col");
var sticky = stickydiv.offsetTop;
var middiv = document.getElementById("mid-col");
function stickyDiv() {
  if (window.pageYOffset > 750) {
    stickydiv.classList.add("sticky");
    middiv.classList.add("stickyMid");
  } else {
    stickydiv.classList.remove("sticky");
    middiv.classList.remove("stickyMid");
  }
}
