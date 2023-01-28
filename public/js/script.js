jQuery(function () {
    jQuery('.navbar-sidenav li').each(function () {
        var href = jQuery(this).find('a').attr('href');
        if (window.location.pathname.indexOf(href) > -1) {
            jQuery('.navbar-sidenav li a').removeClass('current');
            jQuery(this).find('a').addClass('current');

        }
    });
});
$(document).ready(function () {
    $('#dataTable').DataTable();
});
$(".hover").mouseleave(
    function () {
        $(this).removeClass("hover");
    }
);

(function ($) {
    "use strict"; // Start of use strict
    // Configure tooltips for collapsed side navigation
    $('.navbar-sidenav [data-toggle="tooltip"]').tooltip({
        template: '<div class="tooltip navbar-sidenav-tooltip" role="tooltip" style="pointer-events: none;"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    })
    // Toggle the side navigation
    $("#sidenavToggler").click(function (e) {
        e.preventDefault();
        $("body").toggleClass("sidenav-toggled");
        $(".navbar-sidenav .nav-link-collapse").addClass("collapsed");
        $(".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level").removeClass("show");
    });
    // Force the toggled class to be removed when a collapsible nav link is clicked
    $(".navbar-sidenav .nav-link-collapse").click(function (e) {
        e.preventDefault();
        $("body").removeClass("sidenav-toggled");
    });
    // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
    $('body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse').on('mousewheel DOMMouseScroll', function (e) {
        var e0 = e.originalEvent,
            delta = e0.wheelDelta || -e0.detail;
        this.scrollTop += (delta < 0 ? 1 : -1) * 30;
        e.preventDefault();
    });
    // Scroll to top button appear
    $(document).scroll(function () {
        var scrollDistance = $(this).scrollTop();
        if (scrollDistance > 100) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });
    // Configure tooltips globally
    $('[data-toggle="tooltip"]').tooltip()
    // Smooth scrolling using jQuery easing
    $(document).on('click', 'a.scroll-to-top', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
    });
})(jQuery); // End of use strict
// const body = document.querySelector('body'),
//     sidebar = body.querySelector('nav'),
//     toggle = body.querySelector(".toggle"),
//     searchBtn = body.querySelector(".search-box"),
//     modeSwitch = body.querySelector(".toggle-switch"),
//     modeText = body.querySelector(".mode-text");
// let toggle_ = true;

// toggle.addEventListener("click", () => {
//     sidebar.classList.toggle("close");
//     if (toggle_) {
//         document.documentElement.style.setProperty('--side-nav-width', "250px");
//     } else {
//         document.documentElement.style.setProperty('--side-nav-width', "80px");
//     }
//     toggle_ = !toggle_;
//     console.log("toggle");
// })

// searchBtn.addEventListener("click", () => {
//     sidebar.classList.remove("close");
//     console.log("search");
//     document.documentElement.style.setProperty('--side-nav-width', "250px");
// })

// jQuery(function () {
//     jQuery('.sidebar li').each(function () {
//         var href = jQuery(this).find('a').attr('href');
//         if (window.location.pathname.indexOf(href) > -1) {
//             jQuery('.sidebar li a').removeClass('active');
//             jQuery(this).find('a').addClass('active');

//         }
//     });
// });
