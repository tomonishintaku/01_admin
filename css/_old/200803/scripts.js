// HUMBURGER menu
//parts: (1) {_mobile-menu.scss}, (2) "HUMBURGER menu" section in {scripts.js}, (3) "HUMBURGER menu" section in {header.php} 

function toggleNav() {
  var body = document.body;
  var hamburger = document.getElementById('js-hamburger');
  var blackBg = document.getElementById('js-black-bg');

  hamburger.addEventListener('click', function () {
    body.classList.toggle('nav-open');
  });
  blackBg.addEventListener('click', function () {
    body.classList.remove('nav-open');
  });
}
toggleNav();

// Close menu when you click an anchor link on MOBILE version
$('.navigation a[href]').on('click', function (event) {
  $('.hamburger').trigger('click');
});

// HUMBURGER menu END