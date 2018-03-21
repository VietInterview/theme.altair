// -------------------- MINIFY/CONCATENATE JS FILES --------------------
'use strict';

var gulp = require('gulp'),
    plugins = require("gulp-load-plugins")({
        pattern: ['gulp-*', 'gulp.*'],
        replaceString: /\bgulp[\-.]/
    }),
    // chalk error
    chalk = require('chalk'),
    chalk_error = chalk.bold.red;


// commmon
gulp.task('js_common', function () {
    return gulp.src([
            "bower_components/jquery/dist/jquery.js",
            "bower_components/modernizr/modernizr.js",
            // moment
            "bower_components/moment/moment.js",
            // fastclick (touch devices)
            "bower_components/fastclick/lib/fastclick.js",
            // custom scrollbar
            "bower_components/jquery.scrollbar/jquery.scrollbar.js",
            // create easing functions from cubic-bezier co-ordinates
            "bower_components/jquery-bez/jquery.bez.min.js",
            // Get the actual width/height of invisible DOM elements with jQuery
            "bower_components/jquery.actual/jquery.actual.js",
            // waypoints
            "bower_components/waypoints/lib/jquery.waypoints.js",
            // velocityjs (animation)
            "bower_components/velocity/velocity.js",
            "bower_components/velocity/velocity.ui.js",
            // advanced cross-browser ellipsis
            "bower_components/jquery.dotdotdot/src/jquery.dotdotdot.min.js",
            // iCheck
            "bower_components/iCheck/icheck.js",
            // selectize
            "bower_components/selectize/dist/js/standalone/selectize.js",
            // switchery
            "bower_components/switchery/dist/switchery.js",
            // prism syntax highlighter
            "bower_components/prism/prism.js",
            "bower_components/prism/components/prism-php.js",
            "bower_components/prism/plugins/line-numbers/prism-line-numbers.js",
            // textarea-autosize
            "bower_components/autosize/dist/autosize.js",
            // hammerjs
            "bower_components/hammerjs/hammer.js",
            // jquery.debouncedresize
            "bower_components/jquery.debouncedresize/js/jquery.debouncedresize.js",
            // screenfull
            "bower_components/screenfull/dist/screenfull.js",
            // waves
            "bower_components/Waves/dist/waves.js"
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
            "bower_components/uikit/js/components/autocomplete.js",
            "assets/js/custom/uikit_datepicker.js",
            "bower_components/uikit/js/components/form-password.js",
            "bower_components/uikit/js/components/form-select.js",
            "bower_components/uikit/js/components/grid.js",
            "bower_components/uikit/js/components/lightbox.js",
            "bower_components/uikit/js/components/nestable.js",
            "bower_components/uikit/js/components/notify.js",
            "bower_components/uikit/js/components/slideshow.js",
            "bower_components/uikit/js/components/slider.js",
            "bower_components/uikit/js/components/sortable.js",
            //"assets/js/custom/uikit_sortable.js",
            "bower_components/uikit/js/components/sticky.js",
            "bower_components/uikit/js/components/tooltip.js",
            "assets/js/custom/uikit_timepicker.js",
            "bower_components/uikit/js/components/upload.js",
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

// uikit htmleditor
gulp.task('js_uikit_htmleditor', function () {
    return gulp.src([
            // htmleditor
            "bower_components/codemirror/lib/codemirror.js",
            "bower_components/codemirror/mode/markdown/markdown.js",
            "bower_components/codemirror/addon/mode/overlay.js",
            "bower_components/codemirror/mode/javascript/javascript.js",
            "bower_components/codemirror/mode/php/php.js",
            "bower_components/codemirror/mode/gfm/gfm.js",
            "bower_components/codemirror/mode/xml/xml.js",
            "bower_components/marked/lib/marked.js",
            "bower_components/uikit/js/components/htmleditor.js"
        ])
        .pipe(plugins.concat('uikit_htmleditor_custom.js'))
        .pipe(gulp.dest('assets/js/'))
        .pipe(plugins.uglify({
            mangle: true
        }).on('error', function (e) {
            console.log('\x07', e.message);
            return this.end();
        }))
        .pipe(plugins.rename('uikit_htmleditor_custom.min.js'))
        .pipe(plugins.size({
            showFiles: true
        }))
        .pipe(gulp.dest('assets/js/'));
});

// custom kendoui
gulp.task('js_kendoui', function () {
    // js
    return gulp.src([
            "bower_components/kendo-ui/src/js/kendo.core.js",
            "bower_components/kendo-ui/src/js/kendo.color.js",
            "bower_components/kendo-ui/src/js/kendo.data.js",
            "bower_components/kendo-ui/src/js/kendo.calendar.js",
            "bower_components/kendo-ui/src/js/kendo.popup.js",
            "bower_components/kendo-ui/src/js/kendo.datepicker.js",
            "bower_components/kendo-ui/src/js/kendo.timepicker.js",
            "bower_components/kendo-ui/src/js/kendo.datetimepicker.js",
            "bower_components/kendo-ui/src/js/kendo.list.js",
            "bower_components/kendo-ui/src/js/kendo.fx.js",
            "bower_components/kendo-ui/src/js/kendo.userevents.js",
            "bower_components/kendo-ui/src/js/kendo.menu.js",
            "bower_components/kendo-ui/src/js/kendo.draganddrop.js",
            "bower_components/kendo-ui/src/js/kendo.slider.js",
            "bower_components/kendo-ui/src/js/kendo.mobile.scroller.js",
            "bower_components/kendo-ui/src/js/kendo.autocomplete.js",
            "bower_components/kendo-ui/src/js/kendo.combobox.js",
            "bower_components/kendo-ui/src/js/kendo.dropdownlist.js",
            "bower_components/kendo-ui/src/js/kendo.colorpicker.js",
            "bower_components/kendo-ui/src/js/kendo.combobox.js",
            "bower_components/kendo-ui/src/js/kendo.maskedtextbox.js",
            "bower_components/kendo-ui/src/js/kendo.multiselect.js",
            "bower_components/kendo-ui/src/js/kendo.numerictextbox.js",
            "bower_components/kendo-ui/src/js/kendo.toolbar.js",
            "bower_components/kendo-ui/src/js/kendo.panelbar.js",
            "bower_components/kendo-ui/src/js/kendo.window.js"
        ])
        .pipe(plugins.concat('kendoui_custom.js'))
        .pipe(gulp.dest('assets/js/'))
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename('kendoui_custom.min.js'))
        .pipe(plugins.size({
            showFiles: true
        }))
        .pipe(gulp.dest('assets/js/'));

});

// minify common/page js
gulp.task('js_minify', function () {
    return gulp.src([
            'assets/js/altair_admin_common.js',
            'assets/js/pages/*.js',
            'assets/js/custom/*.js',
            '!assets/js/**/*.min.js'
        ])
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename({
            extname: ".min.js"
        }))
        .pipe(gulp.dest(function (file) {
            return file.base;
        }));
});