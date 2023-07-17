const link = document.querySelector(".about-me__link");
const text = document.querySelector(".about-me__text-hidden");

link.onclick = function () {
  text.classList.toggle("hidden");
};
