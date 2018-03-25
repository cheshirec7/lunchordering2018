let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    // .js('resources/assets/js/fa.js', 'public/js')
    .js('resources/assets/js/dtExtend.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/reports.scss', 'public/css')
    .sass('resources/assets/sass/ordering.scss', 'public/css')
    .sass('resources/assets/sass/ordermonth.scss', 'public/css')
    .sass('resources/assets/sass/orderlunches.scss', 'public/css')
    .sass('resources/assets/sass/pace-theme-flash.scss', 'public/css');

if (mix.inProduction()) {
    mix.version();
}
