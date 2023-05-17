const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/_SiteHeader.scss', 'public/css')
    .sass('resources/sass/product.scss', 'public/css')
    .sass('resources/sass/style2.scss', 'public/css')
    .sass('resources/sass/bxslider.scss', 'public/css')
    .sass('resources/sass/ultimateicons.scss', 'public/css')
    .sass('resources/sass/legacydropdown.scss', 'public/css')
    .sass('resources/sass/layout-bundle.scss', 'public/css')
    .sass('resources/sass/base-min.scss', 'public/css')
    .sass('resources/sass/skin.scss', 'public/css')
    .sass('resources/sass/22-layout.scss', 'public/css')
    .sass('resources/sass/home.scss', 'public/css');
    
