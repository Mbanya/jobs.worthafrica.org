$(document).ready(function () {
    'use strict';
    var slider = new Swiper('#hero', {
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        parallax: true,
        speed: 1000
    });
    var testimonials_slider = new Swiper('#testimonials_slider', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        speed: 1000,
        autoplay: 2000
    });
    var contentSlider = new Swiper('#inner-conent-slider', {
        paginationClickable: true,
        speed: 1000,
        effect: 'fade',
        fade: {crossFade: true},
        autoplay: 2000
    });
    $('[data-pages="search"]').search({
        searchField: '#overlay-search',
        closeButton: '.overlay-close',
        suggestions: '#overlay-suggestions',
        brand: '.brand',
        onSearchSubmit: function (searchString) {
            console.log("Search for: " + searchString);
        },
        onKeyEnter: function (searchString) {
            console.log("Live search for: " + searchString);
            var searchField = $('#overlay-search');
            var searchResults = $('.search-results');
            clearTimeout($.data(this, 'timer'));
            searchResults.fadeOut("fast");
            var wait = setTimeout(function () {
                searchResults.find('.result-name').each(function () {
                    if (searchField.val().length != 0) {
                        $(this).html(searchField.val());
                        searchResults.fadeIn("fast");
                    }
                });
            }, 500);
            $(this).data('timer', wait);
        }
    });
});