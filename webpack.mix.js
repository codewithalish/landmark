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

// mix.copy('node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js', 'public/vendor/')
//     .copy('node_modules/simplebar/dist/simplebar.min.js', 'public/vendor/')
//     .copy('node_modules/chart.js/dist/chart.min.js', 'public/vendor/')
//     .copy('node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js', 'public/vendor')
//     .copy('node_modules/@coreui/utils/dist/coreui-utils.js', 'public/vendor')
// ;


mix.js('node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js', 'public/js/app.js')
    .js('node_modules/simplebar/dist/simplebar.min.js', 'public/js/app.js')
    .js('node_modules/chart.js/dist/chart.min.js', 'public/js/app.js')
    .js('node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js', 'public/js/app.js')
    .js('node_modules/@coreui/utils/dist/coreui-utils.js', 'public/js/app.js')
    .js('resources/js/admin/main.js', 'public/js/app.js')
;

mix.postCss('node_modules/simplebar/dist/simplebar.css', 'public/css/app.css')
    .postCss('resources/css/admin/style.css', 'public/css/app.css')
    .postCss('resources/css/admin/examples.css', 'public/css/app.css')
;


















