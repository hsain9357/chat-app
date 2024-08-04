const navbar = document.querySelector(".navbar");
const profile_image = document.querySelector("a.profile_image");
const options_humb = document.querySelector(".options_humb");
const options = document.querySelectorAll("ul.options");
const humberger = document.querySelector(".humberger");
const slogan = document.querySelector(".slogan");
const html = document.querySelector("html");
const body = document.querySelector("body");
let ishumclicked = false;
let isimgclicked = false;
if (profile_image) profile_image.addEventListener("click", handleOptions);
if (options_humb) options_humb.addEventListener("click", handleOptions);

function handleOptions() {
  isimgclicked = !isimgclicked;
  if (isimgclicked) {
    options[0].classList.add("active");
    options[1].classList.add("active");
    if (options_humb) options_humb.classList.add("active");
  } else {
    options[0].classList.remove("active");
    options[1].classList.remove("active");
    if (options_humb) options_humb.classList.remove("active");
  }
}
humberger.addEventListener("click", () => {
  ishumclicked = !ishumclicked;
  if (ishumclicked) {
    humberger.classList.add("active");
    navbar.classList.add("active");
    slogan.classList.add("active");
  } else {
    humberger.classList.remove("active");
    navbar.classList.remove("active");
    slogan.classList.remove("active");
  }
});

if (window.innerWidth <= 658) {
  navbar.classList.add("dropdown");
}
