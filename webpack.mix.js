const mix = require('laravel-mix');

mix.styles([
    'resources/assets/css/animsition.min.css',
    'resources/assets/css/core.css',
    'resources/assets/css/custom.css',
    'resources/assets/css/elements.css'
], 'public/css/main.css');

mix.scripts([
    'resources/assets/js/vendor.js',
    'resources/assets/js/functions.js',
    'resources/assets/modules/titan-slider/titan-slider.js',
    'resources/assets/modules/tera-lightbox/tera-lightbox.js'
], 'public/js/main.js');

mix.copyDirectory('resources/assets/images', 'public/images');

mix.copyDirectory('resources/assets/fonts', 'public/fonts');
