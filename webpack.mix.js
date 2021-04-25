const mix = require('laravel-mix');

mix.copy('resources/assets/website/images', 'public/website/images')
    .copy('resources/assets/website/fonts', 'public/website/fonts')

    .postCss('resources/assets/website/css/animsition.min.css', 'public/website/css')
    .postCss('resources/assets/website/css/core.css', 'public/website/css')
    .postCss('resources/assets/website/css/custom.css', 'public/website/css')
    .postCss('resources/assets/website/css/elements.css', 'public/website/css')

    .js('resources/assets/website/js/vendor.js', 'public/website/js')
    .js('resources/assets/website/js/functions.js', 'public/website/js')
    .js('resources/assets/website/modules/img-scroller/img-scroller.js', 'public/website/modules/img-scroller')
    .js('resources/assets/website/modules/tera-lightbox/tera-lightbox.js', 'public/website/modules/tera-lightbox')
    .js('resources/assets/website/js/custom.js', 'public/website/js')
