const menuToggle = document.querySelector(".toggle");
const showcase = document.querySelector(".showcase");

menuToggle.addEventListener("click", () => {
  menuToggle.classList.toggle("active");
  showcase.classList.toggle("active");
});

var movementStrength = 25;
var height = movementStrength / window.screen.height;
var width = movementStrength / window.screen.width;
const hero = document.getElementById("section-hero");

hero.addEventListener("mousemove", (e) => {
  var pageX = e.clientX - window.screen.width / 2;
  var pageY = e.clientY - window.screen.height / 2;
  var newvalueX = width * pageX * -1 - 10;
  var newvalueY = height * pageY * -1 - 0;
  hero.style.backgroundPosition = newvalueX + "px     " + newvalueY + "px";

  const div = document.createElement("div");
  div.classList.add("hero-section-mouseClick");
  div.style.left = e.clientX + "px";
  div.style.top = e.clientY + "px";
  const box = document.getElementById("section-hero");
  box.appendChild(div);
  setTimeout(() => {
    box.removeChild(div);
    div.remove();
  }, 250);
});
