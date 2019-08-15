const { mix } = require('laravel-mix');
var webpack = require('webpack'),
    path    = require('path');
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

mix.setPublicPath('public');

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: 'source-map',
    })
    .sourceMaps();
} else {
  mix.version();
}

mix.webpackConfig({
         module: {
           loaders: [{
             test: /\.json$/,
             loader: 'json-loader'
             }]
           }
       });


const vendor = [
  'jquery', 'axios'
];

mix
  .js('./Resources/assets/js/app.js', 'js/dashboard.js')
  .extract(vendor)
  .sass('./Resources/assets/sass/app.scss', 'css/dashboard.css')
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery', 'jquery'],
  });
