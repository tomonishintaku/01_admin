// HUMBURGER menu
//parts: (1) {_mobile-menu.scss}, (2) "HUMBURGER menu" section in {scripts.js}, (3) "HUMBURGER menu" section in {header.php} 

function toggleNav() {
    var body = document.body;
    var hamburger = document.getElementById('js-hamburger');
    var blackBg = document.getElementById('js-black-bg');

    hamburger.addEventListener('click', function() {
        body.classList.toggle('nav-open');
    });
    blackBg.addEventListener('click', function() {
        body.classList.remove('nav-open');
    });
}
toggleNav();

// Close menu when you click an anchor link on MOBILE version
$('.navigation a[href]').on('click', function(event) {
    $('.hamburger').trigger('click');
});

// HUMBURGER menu END


// ADD class when scroll
//https://webdesignday.jp/inspiration/technique/jquery-js/3657/

var startPos = 0,
    winScrollTop = 0;
$(window).on('scroll', function() {
    winScrollTop = $(this).scrollTop();
    if (winScrollTop >= startPos) {
        $('.hamburger').addClass('transform');
    } else {
        $('.hamburger').removeClass('transform');
    }
    startPos = winScrollTop;
});

// ADD class when scroll END


// modal window
$(function() {
    $('.js-modal-open').on('click', function() {
        $('.js-modal').fadeIn();
        return false;
    });
    $('.js-modal-close').on('click', function() {
        $('.js-modal').fadeOut();
        return false;
    });
});
// modal window END