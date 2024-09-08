const path = require('path');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
    mode: 'production', // or 'development'
    entry: path.resolve(__dirname, 'resources/images'), // Directory entry
    output: {
        path: path.resolve(__dirname, 'public/images'),
        filename: 'bundle.js', // Dummy file to satisfy Webpack
    },
    plugins: [
        new ImageminPlugin({
            pngquant: { quality: '65-80' },
            jpegtran: { progressive: true },
            svgo: {
                plugins: [
                    { removeViewBox: false },
                    { removeEmptyAttrs: true }
                ]
            }
        }),
        new CopyWebpackPlugin({
            patterns: [
                {
                    from: path.resolve(__dirname, 'resources/images/'), // Process all images
                    to: path.resolve(__dirname, 'public/images'),
                    globOptions: {
                        ignore: ['**/bundle.js'] // Ignore the dummy file
                    }
                }
            ]
        })
    ],
    module: {
        rules: [
            {
                test: /\.(png|jpe?g|gif|svg)$/i,
                type: 'resource',
                generator: {
                    filename: 'images/[name][ext][query]'
                }
            }
        ]
    },
    resolve: {
        extensions: ['.js']
    }
};
