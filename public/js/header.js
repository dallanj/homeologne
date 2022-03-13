$(function() {
    
    var header = $("#mobile-navbar");
    var mobileNavbutton = $(".mobile-navbutton");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 800) {
            header.removeClass('hidden').addClass("animate__animated animate__slideInDown");
            mobileNavbutton.addClass("hidden");
        } else {
            header.removeClass("animate__animated animate__slideInDown").addClass('hidden');
            mobileNavbutton.removeClass("hidden");
        }
    });
});

const openNav1 = document.getElementById('openNav1');
const openNav2 = document.getElementById('openNav2');
const closeNav = document.getElementById('closeNav');
const navMenu = document.getElementById('navMenu');

openNav1.addEventListener('click', function () {
    navMenu.classList.remove('hidden')
    navMenu.classList.remove('hideMenu');
    navMenu.classList.add('showMenu')
});
openNav2.addEventListener('click', function () {
    navMenu.classList.remove('hidden')
    navMenu.classList.remove('hideMenu');
    navMenu.classList.add('showMenu')
});
closeNav.addEventListener('click', function () {
    navMenu.classList.remove('showMenu');
    navMenu.classList.add('hideMenu');
    setTimeout(() => {
        navMenu.classList.add('hidden'); 
    }, 250);
});