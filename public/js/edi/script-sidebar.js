$(document).ready(function() {
    $('nav, .nav-controller').on('click', function(event) {
        $('nav').toggleClass('active');
    });

    $('nav').on('mouseover', function(event) {
        $('nav').addClass('jimena');
    });
    $('nav-controller.controller-close').on('click', function(event) {
        $('nav').removeClass('active');
    })
});