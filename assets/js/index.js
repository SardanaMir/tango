const link = document.querySelector(".about-me__link");
const hiddenTexts = document.querySelectorAll(".about-me__text-hidden");

link.addEventListener("click", () => {
  hiddenTexts.forEach((text) => {
    text.classList.toggle("hidden");
  });
});

$(document).ready(function() {

  $('form').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "assets/mailer/smart.php",
        data: $(this).serialize()
    }).done(function() {
        $(this).find("input").val("");
        $('#form').fadeOut();
        $('.overlay, #thanks').fadeIn('slow');

        $('form').trigger('reset');
    });
    return false;
  });

  //modal

  $('.overlay__modal-close').on('click', function() {
      $('.overlay').fadeOut('slow');
  });

  $('.overlay').on('click', function() {
      $('.overlay').fadeOut('slow');
  });

});
