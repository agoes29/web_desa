let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').setPublicPath('dist');

mix.sass('resources/sass/app.scss', 'public/css')