// require('./bootstrap');

// Init AOS libs
// AOS.init({
//     duration: 1000,
//     once: true
// });

$(function() {

    $(".btn_hamburger").click(function() {
        $(this).toggleClass("active_btn")
    });

    // show dropdown list in navigation bar 
    $(".dropdown_nav_link").each(function() {
        $(this).click(function(event) {
            event.preventDefault();
            if (window.innerWidth <= 992) {
                $(this).next().toggleClass("active_dropdown");
            }
        })
    })


});