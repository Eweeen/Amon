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
    .js('resources/js/index.js', 'public/js')
    .js('resources/js/team.js', 'public/js')
    .js('resources/js/chat.js', 'public/js')
    .js('resources/js/form.js', 'public/js')
    .js('resources/js/profil.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/index.scss', 'public/css')
    .sass('resources/sass/chat.scss', 'public/css')
    .sass('resources/sass/forgetPass.scss', 'public/css')
    .sass('resources/sass/form.scss', 'public/css')
    .sass('resources/sass/login.scss', 'public/css')
    .sass('resources/sass/profil.scss', 'public/css')
    .sass('resources/sass/register.scss', 'public/css')
    .sass('resources/sass/team.scss', 'public/css')
    .sass('resources/sass/compte.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .sass('resources/sass/article.scss', 'public/css')
    .sass('resources/sass/articles.scss', 'public/css')
    .sourceMaps();