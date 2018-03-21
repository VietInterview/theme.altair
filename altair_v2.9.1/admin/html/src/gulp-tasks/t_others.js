// -------------------- OTHER TASKS --------------------
'use strict';

var gulp = require('gulp'),
    plugins = require("gulp-load-plugins")({
        pattern: ['gulp-*', 'gulp.*'],
        replaceString: /\bgulp[\-.]/
    }),
    // chalk error
    chalk = require('chalk'),
    chalk_error = chalk.bold.red;


// concatenate codemirror themes
gulp.task('codemirror_themes', function() {
    return gulp.src('bower_components/codemirror/theme/*.css')
        .pipe(plugins.concat('codemirror_themes.css'))
        .pipe(plugins.cleanCss({
            advanced: false,
            keepSpecialComments: 0
        }))
        .pipe(plugins.rename('codemirror_themes.min.css'))
        .pipe(gulp.dest('assets/css'));
});

// compile jtable skin
gulp.task('jtable_skin', function() {
    return gulp.src('assets/skins/jtable/jtable.less')
        .pipe(plugins.less())
        .on('error', function(err) {
            console.log(chalk_error(err.message));
            this.emit('end');
        })
        .pipe(plugins.autoprefixer({
            browsers: ['> 5%','last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('assets/skins/jtable/'))
        .pipe(bs_html.stream())
        .pipe(plugins.cleanCss({
            advanced: false,
            keepSpecialComments: 0
        }))
        .pipe(plugins.rename('jtable.min.css'))
        .pipe(gulp.dest('assets/skins/jtable/'));
});