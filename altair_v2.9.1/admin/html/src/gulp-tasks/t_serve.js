// -------------------- BROWSER SYNC http://www.browsersync.io/docs/ --------------------
'use strict';

var gulp = require('gulp'),
    // browser sync
    bs_html = require('browser-sync').create('bs_html');


gulp.task('serve', (process.argv[3] === '--compile') ? ['default'] : null, function() {
    bs_html.init({
        // http://www.browsersync.io/docs/options/#option-host
        host: "10.0.0.188",
        // http://www.browsersync.io/docs/options/#option-proxy
        proxy: "altair_html.local",
        // http://www.browsersync.io/docs/options/#option-port
        port: '3011',
        ui: {
            port: 3010
        }
    });

    gulp.watch([
        'assets/less/**/*.less',
        '!assets/less/pages/error_page.less',
        '!assets/less/pages/login_page.less'
    ],['less_main']);

    gulp.watch([
        'assets/less/themes/*.less'
    ],['less_themes']);

    // error page
    gulp.watch('assets/less/pages/error_page.less',['less_error_page']);
    gulp.watch([
        'assets/css/error_page.min.css'
    ]).on('change', function() {
        bs_html.reload("assets/css/error_page.min.css")
    });

    // login page
    gulp.watch('assets/less/pages/login_page.less',['less_login_page']);
    gulp.watch([
        'assets/css/login_page.min.css'
    ]).on('change', function() {
        bs_html.reload("assets/css/login_page.min.css")
    });

    // themes
    gulp.watch([
        'assets/css/themes/themes_combined.min.css'
    ]).on('change', function() {
        bs_html.reload("assets/css/themes/themes_combined.min.css")
    });

    // main stylesheet
    gulp.watch([
        'assets/css/main.css'
    ]).on('change', function() {
        bs_html.reload("assets/css/main.css")
    });

    gulp.watch([
        '*.php',
        '*.html',
        'php/**/*.php',
        'assets/js/**/*.js',
        '!assets/js/**/*.min.js'
    ]).on('change', bs_html.reload);
});