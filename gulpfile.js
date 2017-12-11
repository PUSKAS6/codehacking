/**
 * Created by Owner on 8/12/2017.
 */
var gulp = require('gulp');
var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.sass('_app.scss')
        .styles([
            'libs/blog-post.css',
            'libs/bootstrap.css',
            'libs/font-awesome.css',
            'libs/metisMenu.css',
            'libs/sb-admin-2.css'



        ], './public/css/libs.css')
        .scripts([
            'libs/jquery.js',
            'libs/bootstrap.js',
            'libs/metisMenu.js',
            'libs/sb-admin-2.js',
            'libs/scripts.js'

        ], './public/js/libs.js')

});