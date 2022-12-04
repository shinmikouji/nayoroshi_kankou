jQuery(function ($) {
  const hamMenu = $('.l-header__icon');
  const menus = $('.l-header__menus');

  hamMenu.on('click', function () {
      if (hamMenu.hasClass('animation1')) {
          hamMenu.removeClass('animation2');
          setTimeout(() => {
              hamMenu.removeClass('animation1');
              menus.removeClass('animation2');
          }, 500);
      } else {
          hamMenu.addClass('animation1');
          setTimeout(() => {
              hamMenu.addClass('animation2');
              menus.addClass('animation2');
          }, 500);
      }
  });
});