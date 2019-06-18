let mix = require('laravel-mix');

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

mix
   // デフォルト
   .js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/style.scss', 'public/css');

//    // ビルドしたsassをそれぞれ開発側buildディレクトリへ出力
//    .sass('resources/assets/sass/minibbs.scss', '../resources/assets/build/css')
//    // buildディレクトリに出力したcssファイルを、１つのファイルにまとめてpublicディレクトリへ出力する
//    .styles(
//       [
//          'resources/assets/build/css/minibbs.css'
//       ],
//       'public/css/main.css'
//    )
//    // １つにまとめてpublicディレクトリへ出力する
//   .js(
//      [
//         'resources/assets/js/swiper.js',
//       ],
//       'public/js/main.js'
//    );
