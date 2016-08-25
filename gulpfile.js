var gulp = require('gulp');
var exec = require('child_process').exec;
var path = require('path');
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
 //   mix.sass('app.scss');
	mix.phpUnit([] , path.normalize('vendor/bin/phpunit') + ' --verbose');
});

gulp.task('phpunit', function (cb) {
    exec('vendor\\bin\\phpunit', function (err, stdout, stderr) {
        console.log(stdout);
        console.log(stderr);
        cb(err);
    });
})