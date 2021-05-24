const mix = require('laravel-mix');

// Website
mix
    .copy('resources/assets/website/images', 'public/website/images')

    .postCss('resources/assets/website/css/core.css', 'public/website/css')
    .postCss('resources/assets/website/css/custom.css', 'public/website/css')
    .postCss('resources/assets/website/css/elements.css', 'public/website/css')
    .postCss('resources/assets/website/css/animsition.min.css', 'public/website/css')


    .copy('resources/assets/website/js/vendor.js', 'public/website/js')

    .js('resources/assets/website/js/functions.js', 'public/website/js')
    .js('resources/assets/website/modules/img-scroller/img-scroller.js', 'public/website/modules/img-scroller')
    .js('resources/assets/website/modules/titan-slider/titan-slider.js', 'public/website/modules/titan-slider')
    .js('resources/assets/website/modules/tera-lightbox/tera-lightbox.js', 'public/website/modules/tera-lightbox')
    .js('resources/assets/website/js/custom.js', 'public/website/js')

    .copy('resources/assets/website/fonts', 'public/website/fonts')

// Dashboard
mix.copy('resources/assets/dashboard', 'public/dashboard');
