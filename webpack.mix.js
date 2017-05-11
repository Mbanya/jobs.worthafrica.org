const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');*/

// mix.js('public/js/vendor/google-fonts.js','public/js/vendor')
//     .js('public/js/vendor/jquery.easing.js','public/js/vendor')
//     .js('public/js/vendor/jquery.waypoints.min.js','public/js/vendor')
//     .js('public/js/vendor/bootstrap.min.js','public/js/vendor')
//     .js('public/js/vendor/bootstrap-hover-dropdown.min.js','public/js/vendor')
//     .js('public/js/vendor/smoothscroll.js','public/js/vendor')
//     .js('public/js/vendor/jquery.localScroll.min.js','public/js/vendor')
//     .js('public/js/vendor/jquery.scrollTo.min.js','public/js/vendor')
//     .js('public/js/vendor/jquery.stellar.min.js','public/js/vendor')
//     .js('public/js/vendor/jquery.parallax.js','public/js/vendor')
//     .js('public/js/vendor/slick.min.js','public/js/vendor')
//     .js('public/js/vendor/jquery.easypiechart.min.js','public/js/vendor')
//     .js('public/js/vendor/countup.min.js','public/js/vendor')
//     .js('public/js/vendor/isotope.min.js','public/js/vendor')
//     .js('public/js/vendor/jquery.magnific-popup.min.js','public/js/vendor')
//     .js('public/js/vendor/animated-heading.js','public/js/vendor')
//     .js('public/js/vendor/wow.min.js','public/js/vendor')
//     .js('public/js/main.js','public/js')
//     .js('public/js/vendor/jquery-2.1.4.min.js','public/js/vendor')
//     .js('resources/js/app.js', 'public/js');



mix.combine([
    'public/css/vendor/bootstrap.min.css',
    'public/css/vendor/slick.css',
    'public/css/vendor/magnific-popup.css',
    'public/css/vendor/animate.css',
    'public/css/vendor/animated-heading.css',
    'public/css/main.css',
    'public/css/responsive.css',
],'public/css/all.css');



