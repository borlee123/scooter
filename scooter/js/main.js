$(function () {
  $(".scooter__slider").slick({
    dots: true,
    arrows: false,
    focusOnSelect: true,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
  });
});
$(".card__btn-popup").click(function (e) {
  e.preventDefault();
  $(".popup-bg").fadeIn(200);
  $("html").addClass("no-scroll");
});

$(".close-popup").click(function () {
  $(".popup-bg").fadeOut(200);
  $("html").removeClass("no-scroll");
});
