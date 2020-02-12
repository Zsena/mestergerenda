
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

mix.copy('node_modules/jquery/dist/jquery.js', 'public/assets/js/jquery.js');
mix.copy('resources/assets/js/jquery.validate.min.js', 'public/assets/js/jquery.validate.min.js');

mix.js('resources/assets/js/app.js', 'public/assets/js').extract(['jQuery'])
    .sass('resources/assets/sass/app.scss', 'public/assets/css');
mix.copyDirectory('resources/assets', 'public/assets');

