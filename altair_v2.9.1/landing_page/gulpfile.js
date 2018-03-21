/*
*  Altair Admin (Landing Page)
*  Automated tasks ( http://gulpjs.com/ )
*/

var gulp = require('gulp'),
    plugins = require("gulp-load-plugins")({
        pattern: ['gulp-*', 'gulp.*', '*'],
        replaceString: /\bgulp[\-.]/
    }),
    runSequence = require("run-sequence");

// browser sync
var bs_landing = require('browser-sync').create('altair_landing_page');

// chalk error
var chalk = require('chalk');
var chalk_error = chalk.bold.red;

// get altair version
var pjson = require('./package.json');
var version = pjson.version;

// 1. -------------------- MINIFY/CONCATENATE JS FILES --------------------

// commmon
gulp.task('js_common', function () {
    return gulp.src([
        "bower_components/jquery/dist/jquery.js",
        // fastclick (touch devices)
        "bower_components/fastclick/lib/fastclick.js",
        // bez easing
        "bower_components/jquery-bez/jquery.bez.min.js",
        // one page nav
        "assets/js/custom/jquery.nav.js"
    ])
        .pipe(plugins.concat('common.js'))
        .on('error', function(err) {
            console.log(chalk_error(err.message));
            this.emit('end');
        })
        .pipe(gulp.dest('assets/js/'))
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename('common.min.js'))
        .pipe(plugins.size({
            showFiles: true
        }))
        .pipe(gulp.dest('assets/js/'));
});

// custom uikit
gulp.task('js_uikit', function () {
    return gulp.src([
        // uikit core
        "bower_components/uikit/js/uikit.js",
        // uikit components
        "bower_components/uikit/js/components/accordion.js",
        "bower_components/uikit/js/components/grid.js",
        "bower_components/uikit/js/components/lightbox.js",
        "bower_components/uikit/js/components/parallax.js",
        "bower_components/uikit/js/components/slider.js",
        "bower_components/uikit/js/components/slideshow.js",
        "bower_components/uikit/js/components/tooltip.js",
        "assets/js/custom/uikit_beforeready.js"
    ])
        .pipe(plugins.concat('uikit_custom.js'))
        .pipe(gulp.dest('assets/js/'))
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename('uikit_custom.min.js'))
        .pipe(plugins.size({
            showFiles: true
        }))
        .pipe(gulp.dest('assets/js/'));
});

// common/custom functions
gulp.task('js_minify', function () {
    return gulp.src([
        'assets/js/*.js',
        '!assets/js/**/*.min.js'
    ])
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename({
            extname: ".min.js"
        }))
        .pipe(gulp.dest(function(file) {
            return file.base;
        }));
});

// -------------------- LESS TO CSS --------------------

// main styles
gulp.task('less_main', function() {
    return gulp.src('assets/less/main.less')
        .pipe(plugins.less())
        .on('error', function(err) {
            console.log(chalk_error(err.message));
            this.emit('end');
        })
        .pipe(plugins.autoprefixer({
            browsers: ['> 5%','last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('assets/css'))
        .pipe(bs_landing.stream())
        .pipe(plugins.cleanCss({
            advanced: false,
            keepSpecialComments: 0
        }))
        .pipe(plugins.rename('main.min.css'))
        .pipe(gulp.dest('assets/css'));
});

// -------------------- BROWSER SYNC http://www.browsersync.io/docs/ --------------------
gulp.task('serve', function() {

    bs_landing.init({
        // http://www.browsersync.io/docs/options/#option-host
        host: "10.0.0.188",
        // http://www.browsersync.io/docs/options/#option-proxy
        proxy: "altair_landing.local",
        // http://www.browsersync.io/docs/options/#option-port
        port: 3066,
        // http://www.browsersync.io/docs/options/#option-notify
        notify: true,
        ui: {
            port: 3065
        }
    });

    gulp.watch([
        'assets/less/**/*.less'
    ],['less_main']);

    gulp.watch([
        'index.html'
    ]).on('change', bs_landing.reload);

});

// -------------------- DEFAULT TASK ----------------------
gulp.task('default', function(callback) {
    return runSequence(
        ['js_common','js_minify','js_uikit','less_main'],
        callback
    );
});