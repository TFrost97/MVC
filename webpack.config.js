const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');

module.exports = {
  entry: './resources/assets/js/app.js',
  output: {
    path: path.resolve(__dirname, 'public/assets/js'),
    filename: 'main.js'
  },

  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      },
        {
          test: /\.s[ac]ss$/i,
          use: [
            {
            loader: MiniCssExtractPlugin.loader,
            options: {
                publicPath: '../',
            }
            }
            ,
            // Translates CSS into CommonJS
            'css-loader',
            // Compiles Sass to CSS
            'sass-loader',
          ],
        }
    ], 
  },
  plugins: [new MiniCssExtractPlugin({
      filename: '../css/[name].css',
      chunkFilename: '[id].css',
  }),
],
};