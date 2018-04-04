let mix = require('laravel-mix');

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

mix.js([
    'resources/assets/js/app.js',
    'resources/assets/js/bootstrap.js',
    'resources/assets/js/jquery.bubble.text.js',
    'resources/assets/js/popper.min.js',
    'resources/assets/js/flatpickr.min.js',
    'resources/assets/js/script_API.js',
    'resources/assets/js/script_pref.js',
    'resources/assets/js/script.js'
],'public/js/all.js');

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'resources/assets/css/jquery-ui.min.css',
    'resources/assets/css/flatpickr.min.css',
    'resources/assets/css/style.css'
],'public/css/all.css');

mix.copyDirectory('resources/assets/img', 'public/img');