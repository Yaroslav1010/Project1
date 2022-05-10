$('.menu-btn').on('click', function (e) {
    e.preventDefault;
    $(this).toggleClass('menu-btn-active');
    $('.menu-nav').toggleClass('menu-nav-active');
    $('.header').toggleClass('header-active');
    });