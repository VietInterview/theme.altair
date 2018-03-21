//  -------------------- BUILD --------------------------
'use strict';

var gulp = require('gulp'),
    plugins = require("gulp-load-plugins")({
        pattern: ['gulp-*', 'gulp.*'],
        replaceString: /\bgulp[\-.]/
    }),
    runSequence = require('run-sequence'),
    del = require('del'),
    stream = require('merge-stream');


var build_dir = './_dist/';

// clean release folder
gulp.task('build_clean', function() {
    return del.sync(
        [ build_dir+'**' ],
        { force: true },
        function (err, paths) {}
    );
});

// copy files from /src
gulp.task('build_copy_files',function() {

    // copy root files
    var root_files = gulp.src([
            '.htaccess',
            'favicon.ico',
            'package.json',
            '*.php'
        ])
        .pipe(gulp.dest(build_dir));

    // copy bower_components
    var bower_files = gulp.src([
            'bower_components/**',
            '!bower_components/{autosize,autosize/**}',
            '!bower_components/{dense,dense/**}',
            '!bower_components/{fastclick,fastclick/**}',
            '!bower_components/{hammerjs,hammerjs/**}',
            '!bower_components/{jquery,jquery/**}',
            '!bower_components/{jquery.actual,jquery.actual/**}',
            '!bower_components/{jquery.dotdotdot,jquery.dotdotdot/**}',
            '!bower_components/{jquery.scrollbar,jquery.scrollbar/**}',
            '!bower_components/{jquery-bez,jquery-bez/**}',
            '!bower_components/{jquery-icheck,jquery-icheck/**}',
            '!bower_components/{kendo-ui,kendo-ui/**}',
            '!bower_components/{marked,marked/**}',
            '!bower_components/{modernizr,modernizr/**}',
            '!bower_components/{prism,prism/**}',
            '!bower_components/{selectize,selectize/**}',
            '!bower_components/{switchery,switchery/**}',
            '!bower_components/{velocity,velocity/**}',
            '!bower_components/{waypoints,waypoints/**}'
        ])
        .pipe(gulp.dest(build_dir+'bower_components/'));

    // copy kendo-ui styles/images
    var bower_kendoui_css = gulp.src([
        'bower_components/kendo-ui/styles/kendo.common-material.min.css',
        'bower_components/kendo-ui/styles/kendo.material.min.css',
        'bower_components/kendo-ui/styles/kendo.materialblack.min.css'
    ],{base: './'})
        .pipe(gulp.dest(build_dir));
    var bower_kendoui_img = gulp.src([
        'bower_components/kendo-ui/styles/Material/**/*',
        'bower_components/kendo-ui/styles/MaterialBlack/**/*',
        'bower_components/kendo-ui/styles/textures/**/*'
    ],{base: './'})
        .pipe(gulp.dest(build_dir));

    // copy assets
    var assets_files = gulp.src([
            'assets/css/**/*.min.css',
            'assets/icons/**/*',
            'assets/img/**/*',
            'assets/js/**/*.min.js',
            'assets/skins/**/*'
        ],{base: './'})
        .pipe(gulp.dest(build_dir));

    // copy data
    var data_files = gulp.src([
            'data/**/*'
        ])
        .pipe(gulp.dest(build_dir+'data/'));

    // copy codemirror files
    var codemirror_files = gulp.src('data/codemirror/*')
        .pipe(gulp.dest(build_dir+'data/codemirror/'));

    // copy php files
    var php_files = gulp.src([
            'php/**/*'
        ])
        .pipe(gulp.dest(build_dir+'php/'));

    // copy helpers
    var helpers_files = gulp.src('helpers/**/*')
        .pipe(gulp.dest(build_dir+'helpers/'));

    // copy file manager
    var file_manager_files = gulp.src([
        'file_manager/**/*'
    ])
        .pipe(gulp.dest(build_dir+'file_manager/'));

    return stream(
        root_files,
        bower_files,
        bower_kendoui_css,
        bower_kendoui_img,
        assets_files,
        data_files,
        codemirror_files,
        php_files,
        helpers_files,
        file_manager_files
    );

});

gulp.task('build',function(callback){
    return runSequence(
        ['default','build_clean'],
        'build_copy_files',
        callback
    );
});