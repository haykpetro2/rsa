var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('base.scss', 'public/css/base.css');
    mix.stylesIn('./resources/assets/vendor/css', 'public/css/vendor.css');
    mix.stylesIn('./resources/assets/theme/css', 'public/css/theme.css');
    mix.sass('app.scss', 'public/css/app.css');

    mix.browserify('base.js', 'public/js/base.js');
    mix.scriptsIn('./resources/assets/vendor/js', 'public/js/vendor.js');
    mix.scriptsIn('./resources/assets/theme/js', 'public/js/theme.js');
    mix.coffee('app.coffee', 'public/js/app.js');
    mix.coffee('policies.coffee', 'public/js/policies.js');
    mix.scripts(['files-dropzone.js'], 'public/js/files-dropzone.js');

    mix.copy('./node_modules/bootstrap-sass/assets/fonts', 'public/fonts');
    mix.copy('./resources/assets/vendor/fonts', 'public/fonts');
    mix.copy('./resources/assets/theme/images', 'public/images');
});
