const mix = require('laravel-mix');
require("laravel-mix-swc");
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

mix.swc('resources/js/app.ts', 'public/js', {
    test: ".*.ts$",
    jsc: {
        parser: {
            syntax: "typescript",
            jsx: false,
            decorators: true,
            dynamicImport: true,
            exportDefaultFrom: true,
        }
    }
})
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .version();
