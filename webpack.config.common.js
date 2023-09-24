const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const glob = require('glob');

module.exports = {
  context: path.resolve(__dirname, "assets"),
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'assets/dist')
  },

  plugins: [
    // new ImageminPlugin({
//       externalImages : {
  //       context: '.',
    //     sources: glob.sync('assets/src/images/**/*.{png,jpg,jpeg,gif,svg}'),
      //   destination: 'assets/dist/images',
        // fileName: '[name].[ext]',
      // }
   //  }),
    new MiniCssExtractPlugin(),
  ],
  module: {
    rules: [
      {
        test: /\.(scss)$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader'
          },
          {
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: () => [
                  require('autoprefixer')
                ]
              }
            }
          },
          {
            loader: 'sass-loader'
          }
        ]
      }
    ]
  }
}
