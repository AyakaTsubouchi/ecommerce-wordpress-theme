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

// mix.js('src/app.js', './')
//     .sass('src/app.scss', './', [
//         //
//     ]);
mix.js('scss/app.js', 'js/')
    .sass('scss/app.scss', 'css/', [
        
    ]);