document.addEventListener("DOMContentLoaded", () => {
  setTimeout(() => {
    document.querySelector("body").style.display = "block";
  }, 1000);
});

function rendered() {
  //Render complete
  //  document.querySelector("body").style.display = "block";
  //
}

function startRender() {
  //Rendering start
  requestAnimationFrame(rendered);
}
function loaded() {
  requestAnimationFrame(startRender);
}

//const image = document.querySelector("img.img");
//
//image.onload = function () {
//  console.log("Loaded: ", Date.now());
//  const interval = setInterval(() => {
//    if (image.naturalWidth > 0 && image.naturalHeight > 0) {
//      rendered();
//    }
//  }, 20);
//};
//
//function rendered() {
//  console.log("Rendered: ", Date.now());
//}
