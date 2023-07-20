const link = document.querySelector(".about-me__link");
const hiddenTexts = document.querySelectorAll(".about-me__text-hidden");

link.addEventListener("click", () => {
  hiddenTexts.forEach((text) => {
    text.classList.toggle("hidden");
  });
});
