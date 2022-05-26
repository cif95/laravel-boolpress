const mix = require('laravel-mix');

    mix.js('resources/js/admin.js', 'public/js')
    mix.js('resources/js/front.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        'public/webfonts'
    )
    .options({
        processCssUrls: false
    });