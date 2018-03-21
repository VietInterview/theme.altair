/*
*  Altair Admin
*  Automated tasks ( http://gulpjs.com/ )
*/
'use strict';

var gulp = require('gulp'),
    runSequence = require('run-sequence');

// include all tasks from separated files (./tasks)
require('require-dir')('./gulp-tasks');

/* Available tasks (/gulp-tasks/*.js)

    LESS (t_less.js)
        gulp less_main - compile main stylesheet (main.css/main.min.css)
        gulp less_error_page - compile error page stylesheet (error_page.css/error_page.min.css)
        gulp less_login_page - compile login page stylesheet (login_page.css/login_page.min.css)
        gulp less_themes - compile themes (themes/_theme_*.css) and concatenate all themes (themes_combined.min.css)
        gulp less_my_theme - compile my theme
        gulp less_style_switcher - compile style switcher stylesheet (style_switcher.css/style_switcher.min.css)

    JS (t_js.js)
        gulp js_common - common scripts/plugins used in template
        gulp js_uikit - custom build of uikit components
        gulp js_uikit_htmleditor - uikit htmledit component + dependencies
        gulp js_kendoui - custom build of kendoui components
        gulp js_minify - minify custom/common scripts

    JSON (t_json.js)
        gulp json_minify - minify json files (/data directory)

    SERVE (t_serve.js)
        gulp serve - synchronised browser testing - https://www.browsersync.io/docs/

        // to make this task working you need to
        // open t_serve.js and change 'host' and 'proxy' options in bs init()
        // proxy - Proxy an EXISTING vhost (localserver/remote server address)
        // host - Override host detection (your server ip)

    BUILD (t_build.js)
        gulp build - build _dist folder (minified js/css/json)

    OTHERS (t_others.js)
        gulp codemirror_themes - concatenate codemirror themes
        gulp jtable_skin - compile jtable skin

 */

// -------------------- PROCESS ALL JS --------------------
gulp.task('js_all', ['js_common','js_uikit','js_uikit_htmleditor','js_kendoui','js_minify']);

// -------------------- PROCESS ALL LESS ------------------
gulp.task('less_all', ['less_main','less_error_page','less_login_page','less_themes','less_my_theme','less_style_switcher']);

// -------------------- DEFAULT TASK ----------------------
gulp.task('default', function(callback) {
    return runSequence(
        ['less_all','js_all'],
        callback
    );
});