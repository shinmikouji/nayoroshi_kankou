jQuery(function ($) {
  const hamMenu = $(".l-header__icon");
  const menus = $(".l-header__menus");

  hamMenu.on("click", function () {
    if (hamMenu.hasClass("animation1")) {
      hamMenu.removeClass("animation2");
      setTimeout(() => {
        hamMenu.removeClass("animation1");
        menus.removeClass("animation2");
      }, 500);
    } else {
      hamMenu.addClass("animation1");
      setTimeout(() => {
        hamMenu.addClass("animation2");
        menus.addClass("animation2");
      }, 500);
    }
  });

  $(".p-use__qaAccordionItem .p-use__qaAccordionItemHead").click(function () {
    $(this).next(".p-use__qaAccordionItemInner").toggleClass("active");
    $(this).children(".p-use__qaAccordionItemHeadIcon").toggleClass("active");
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() >= 80) {
      $(".l-header--top").addClass("fadeIn");
    } else if ($(this).scrollTop() < 80) {
      $(".l-header--top").removeClass("fadeIn");
    }
  });

  $(".p-hero__slider").on('init', function() {
    $('.slick-slide[data-slick-index="0"]').addClass("add-animation");
  }).slick({
      autoplay: true,
      fade: true,
      arrows: false,
      speed: 2000,
      autoplaySpeed: 4000,
      pauseOnFocus: false,
      pauseOnHover: false,
      dots: true,
  })
  .on({
    beforeChange: function (event, slick, currentSlide, nextSlide) {
      $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
      $(".slick-slide", this).eq(currentSlide).addClass("remove-animation");
    },
    afterChange: function () {
      $(".remove-animation", this).removeClass(
        "remove-animation add-animation"
      );
    },
  });
});
