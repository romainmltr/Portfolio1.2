const header = document.querySelector("navbar");
    let prevScrollPos = window.pageYOffset;

window.onscroll = function (){ 
  let currentScrollPos = window.pageYOffset;

  if (prevScrollPos > currentScrollPos) {
      header.classList.remove("scroll");
  } else {
      header.classList.add("scroll");
  }

  prevScrollPos = currentScrollPos;

};