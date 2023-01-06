$(window).scroll(function(){
    if ($(window).scrollTop() >= 150) {
        $('.header__bottom').css('position', 'fixed');
        $('.header__bottom').css('margin-top', '-100px');
         $('.header__bottom').css('z-index', '1000');
        $('.header__bottom').addClass('header__shadow');
    }
    else {
        $('.header__bottom').css('position', 'relative');
        $('.header__bottom').css('margin-top', '0');
        $('.header__bottom').removeClass('header__shadow');
    }
});