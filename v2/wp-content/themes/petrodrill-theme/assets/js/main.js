/**
 * Petrodrill Theme - Main JavaScript
 * Add your custom jQuery code here
 */

jQuery(document).ready(function($) {
    'use strict';

    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = this.getAttribute('href');
        if (target && target !== '#') {
            $('html, body').stop().animate({
                scrollTop: $(target).offset().top - 100
            }, 1000);
        }
    });

    // Add active class to current menu item
    var currentLocation = location.pathname;
    $('nav a').each(function() {
        var href = $(this).attr('href');
        if (currentLocation.indexOf(href) !== -1) {
            $(this).closest('li').addClass('active');
            $(this).closest('li').parent().closest('li').addClass('active');
        }
    });

    // Mobile menu toggle (if you add a hamburger button)
    $('.menu-toggle').on('click', function() {
        $('.sp-menu').toggleClass('mobile-active');
    });

    // Lazy load images (optional - requires additional setup)
    // Add 'loading="lazy"' to img tags in your HTML

    console.log('Petrodrill Theme - Main JS loaded');
});
