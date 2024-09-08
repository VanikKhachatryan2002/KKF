const mix = require('laravel-mix');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const path = require('path');
const glob = require('glob');

// Minify JS files
mix.js('resources/js/app.js', 'public/js')
    .minify('public/js/app.js');

// Compile and minify CSS files
mix.postCss('resources/css/app.css', 'public/css');

// Compile and minify SCSS files
const scssFiles = glob.sync('resources/sass/**/*.scss');

scssFiles.forEach(file => {
    mix.sass(file, 'public/css/app.css');
});

mix.minify('public/css/app.css')

mix.autoload({
    'lazysizes': ['lazysizes']
});

mix.webpackConfig({
    plugins: [
        new ImageminPlugin({
            pngquant: { quality: '65-80' },
            gifsicle: { optimizationLevel: 3 },
            jpegtran: { progressive: true },
            svgo: {
                plugins: [
                    { removeViewBox: false },
                    { removeEmptyAttrs: true }
                ]
            }
        })
    ],
    resolve: {
        alias: {
            '@': path.resolve('resources')
        }
    }
});
