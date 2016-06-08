var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('style.scss');

    mix.scripts([
        'plugins/*.js',
        'config.js',
        'shared/**/*.js',
        'repositories/**/*.js',
        'components/**/*.js',
        'directives/**/*.js',
        'transitions/**/*.js',
        'app.js',
    ], 'public/js/all.js');

    mix.version(["css/style.css", "js/all.js"]);
    mix.stylesIn('resources/assets/css', 'public/css/plugins.css');
});
