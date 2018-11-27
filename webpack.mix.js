const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/js/admin', 'public/js/admin')
    .copy('resources/js/client', 'public/js')
    .copy('resources/images', 'public/images')
    .copy('resources/fonts', 'public/fonts')
    .copy('resources/css/backend_css', 'public/css');
