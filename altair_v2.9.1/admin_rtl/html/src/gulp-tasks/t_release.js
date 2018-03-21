// -------------------- RELEASE (generate package for themeforest) --------------------------
'use strict';

var gulp = require('gulp'),
    plugins = require("gulp-load-plugins")({
        pattern: ['gulp-*', 'gulp.*'],
        replaceString: /\bgulp[\-.]/
    }),
    runSequence = require('run-sequence'),
    stream = require('merge-stream'),
    del = require('del'),
    // chalk error
    chalk = require('chalk'),
    chalk_error = chalk.bold.red,
    // get altair version
    pjson = require('../package.json'),
    version = pjson.version,
    // browser sync
    bs_html = require('browser-sync').create('bs_html');


// directories
var release_dir = '../../_release/'+version+'/',
    release_dist_dir = release_dir + '/altair_v'+version+'/admin_rtl/html/dist/',
    release_src_dir = release_dir + '/altair_v'+version+'/admin_rtl/html/src/',
    release_angular_dir = release_dir + '/altair_v'+version+'/admin_rtl/angular/',
    release_demo_dir = release_dir + '/demo/_demo_site_rtl/';


// clean release folder
gulp.task('release_clean', function() {
    return del.sync(
        [
            release_demo_dir,
            release_dir + '/altair_v'+version+'/admin_rtl/'
        ],
        { force: true },
        function (err, paths) {}
    );
});

// copy files from /src
gulp.task('release_dist_copy',function() {
    // copy favicon
    var root_files = gulp.src(['favicon.ico'])
        .pipe(gulp.dest(release_dist_dir));

    // copy bower_components
    var bower_files = gulp.src([
            'bower_components/**',
            '!bower_components/{autosize,autosize/**}',
            '!bower_components/{dense,dense/**}',
            '!bower_components/{fastclick,fastclick/**}',
            '!bower_components/{hammerjs,hammerjs/**}',
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
        .pipe(gulp.dest(release_dist_dir+'bower_components/'));

    // copy kendo-ui styles/images
    var bower_kendoui_css = gulp.src([
            'bower_components/kendo-ui/styles/kendo.common-material.min.css',
            'bower_components/kendo-ui/styles/kendo.material.min.css',
	        'bower_components/kendo-ui/styles/kendo.materialblack.min.css',
            'bower_components/kendo-ui/styles/kendo.rtl.min.css'
        ],{base: './'})
        .pipe(gulp.dest(release_dist_dir));
    var bower_kendoui_img = gulp.src([
            'bower_components/kendo-ui/styles/Material/**/*',
            'bower_components/kendo-ui/styles/MaterialBlack/**/*',
            'bower_components/kendo-ui/styles/textures/**/*'
        ],{base: './'})
        .pipe(gulp.dest(release_dist_dir));

    // copy assets
    var assets_files = gulp.src([
            'assets/**',
            '!assets/{less,less/**}'
        ])
        .pipe(gulp.dest(release_dist_dir+'assets/'));

    // copy data
    var json_files = gulp.src(['data/**/*.json','data/**/*.php'])
        .pipe(gulp.dest(release_dist_dir+'data/'));

    // copy codemirror files
    var codemirror_files = gulp.src('data/codemirror/*')
        .pipe(gulp.dest(release_dist_dir+'data/codemirror/'));

    // copy filemanager
    var filemanager = gulp.src(['file_manager/**'])
        .pipe(gulp.dest(release_dist_dir+'file_manager/'));

    return stream(root_files,bower_files,bower_kendoui_css,bower_kendoui_img,assets_files,json_files,codemirror_files,filemanager);

});

// copy files from /angular
gulp.task('release_angular_copy',function() {

    var angular_directory = '../angular/';

    var app_files = gulp.src([angular_directory+'app/**'])
        .pipe(gulp.dest(release_angular_dir+'app/'));

    // copy files
    var root_files = gulp.src([
            angular_directory+'bower.json',
            angular_directory+'favicon.ico',
            angular_directory+'gulpfile.js',
            angular_directory+'index.html',
            angular_directory+'package.json'

        ])
        .pipe(gulp.dest(release_angular_dir));

    // copy bower_components
    var bower_files = gulp.src([
            angular_directory+'bower_components/**',
            angular_directory+'!bower_components/{fastclick,fastclick/**}',
            angular_directory+'!bower_components/{hammerjs,hammerjs/**}',
            angular_directory+'!bower_components/{jquery.dotdotdot,jquery.dotdotdot/**}',
            angular_directory+'!bower_components/{jquery.scrollbar,jquery.scrollbar/**}',
            angular_directory+'!bower_components/{jquery-bez,jquery-bez/**}',
            angular_directory+'!bower_components/{modernizr,modernizr/**}',
            angular_directory+'!bower_components/{velocity,velocity/**}',
            angular_directory+'!bower_components/{waypoints,waypoints/**}'
        ])
        .pipe(gulp.dest(release_angular_dir+'bower_components/'));

    // copy assets
    var assets_files = gulp.src([angular_directory+'assets/**'])
        .pipe(gulp.dest(release_angular_dir+'assets/'));

    // copy data
    var data_files = gulp.src([angular_directory+'data/**'])
        .pipe(gulp.dest(release_angular_dir+'data/'));

    // copy gulp-tasks
    var gulp_tasks = gulp.src([angular_directory+'gulp-tasks/**'])
        .pipe(gulp.dest(release_angular_dir+'gulp-tasks/'));

    // copy filemanager
    var filemanager = gulp.src([angular_directory+'file_manager/**'])
        .pipe(gulp.dest(release_angular_dir+'file_manager/'));

    return stream(app_files,root_files,bower_files,assets_files,data_files,gulp_tasks,filemanager);

});

// generate demo html
gulp.task('release_html_demo',function() {
    return gulp.src(release_dist_dir+'/**')
        .pipe(gulp.dest(release_demo_dir+'html/'));
});

// generate demo angularjs
gulp.task('release_app_demo',function() {
    return gulp.src(release_angular_dir+'/**')
        .pipe(gulp.dest(release_demo_dir+'app/'));
});

// generate all pages from php to html (/dist)
gulp.task('release_dist_generate_pages', plugins.shell.task([
    'php helpers/generate_pages/index.php'
]));

// copy admin /src
gulp.task('release_src_copy', function() {
    // admin /src
    gulp.src([
            '../src/**',
            '!../src/.gitignore',
            '!../src/.idea/',
            '!../src/.idea/**',
            '!../src/bower_components/',
            '!../src/bower_components/**',
            '!../src/node_modules/',
            '!../src/node_modules/**'
        ],{ dot: true })
        .pipe(gulp.dest(release_src_dir));
});


// cleanup release
gulp.task('release_cleanup', function() {
    // remove redundant plugins/files from /dist
    return del(
        [
            release_dist_dir+'bower.json',
            release_demo_dir+'html/bower.json',
            release_angular_dir+'bower_components/kendo-ui/src/'
        ],
        { force: true },
        function (err, paths) {}
    );
});

// replace images (distribution)
gulp.task('release_replace_images', function() {
    var replace_dist_img =  gulp.src('../../__release_images/**')
        .pipe(gulp.dest(release_dist_dir+'assets/img/'));

    var replace_src_img =  gulp.src('../../__release_images/**')
        .pipe(gulp.dest(release_src_dir+'assets/img/'));

    var replace_angular_img =  gulp.src('../../__release_images/**')
        .pipe(gulp.dest(release_angular_dir+'assets/img/'));

    return stream(replace_dist_img,replace_src_img,replace_angular_img);

});

// add info banner to files
var project_name = pjson.name;
gulp.task('release_header_js', function(callback) {
    return gulp.src([
            release_src_dir+'assets/js/pages/*.js',
            '!'+release_src_dir+'assets/js/pages/*.min.js'
        ])
        .pipe(plugins.wrapper({
            header: function(file) {
                var file_name_js = file.path.replace(file.base, '');

                if(file_name_js == 'dashbord.js') {
                    var file_name_html = 'index.html';
                } else if(file_name_js == 'kendoui.js')  {
                    var file_name_html = 'kendoui_*.html';
                } else {
                    var file_name_html = file_name_js.replace('.js','.html');
                }

                return '/*\n' +
                    '*  ' + project_name.replace("_", " ") + '\n' +
                    '*  @version v' + pjson.version + '\n' +
                    '*  @author ' + pjson.author + '\n' +
                    '*  @license ' + pjson.license + '\n' +
                    '*  ' + file_name_js +
                    ' - ' +  file_name_html + '\n' +
                    '*/\n' +
                    '\n'
            }
        }))
        .pipe(gulp.dest(release_src_dir+'assets/js/pages/'));
});

gulp.task('release',function(callback){
    return runSequence(
        ['default','release_clean'],
        ['release_dist_copy','release_angular_copy','release_src_copy'],
        ['release_html_demo','release_app_demo'],
        ['release_replace_images','release_cleanup','release_header_js'],
        'release_dist_generate_pages',
        callback
    );
});