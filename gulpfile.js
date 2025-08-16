"use strict";

const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const sourcemaps = require("gulp-sourcemaps");
const postcss = require("gulp-postcss");  // Add vendor prefixes to CSS
const autoprefixer = require('autoprefixer');  // Autoprefixer is a PostCSS plugin which parses your CSS and adds vendor prefixes
const cleanCSS = require('gulp-clean-css');  // Minify and Remove Comments
const jshint = require("gulp-jshint");  // checking if JavaScript code complies with coding rules
// const babel = require('gulp-babel'); // Babel · The compiler for next generation JavaScript
const jshintStylish = require("jshint-stylish");  // jsHint Reporter that provides formatted output in the terminal with colors and symbols to highlight code issues.
const clean = require("gulp-clean");  // deleting files and directories
const browserSync = require("browser-sync").create();  // live reloading and synchronization of browsers across 
const cssnano = require('cssnano');

var sourceDirectory = "./";
var buildDirectory = "./";
var path = {
    src: {
        dir: buildDirectory,
        pages: `${sourceDirectory}**/*.{html,php}`,
        styles: `${sourceDirectory}assets/styles/scss/**/*.scss`,
        scripts: `${sourceDirectory}assets/scripts/**/*.js`,
        plugins: `${sourceDirectory}plugins/**/*`
    },

    build: {
        dir: buildDirectory,
        styles: `${buildDirectory}assets/styles/css/`,
        scripts: `${buildDirectory}assets/scripts/`,
        plugins: `${buildDirectory}plugins/`,
    },
};


// Server 
gulp.task('serve', function() {
    browserSync.init({
        server: {
          baseDir: path.build.dir, // Serve files from the specified directory
        },
        port: 3000, // Specify the port number for BrowserSync server
        notify: false, // Disable notifications
        open: false, // Disable automatic launching of browser window
    });
});

// Clean the Folder
gulp.task("clean", function (cb) {
    return gulp
        .src(path.build.styles, { read: false, allowEmpty: true })
        .pipe(clean());  // Clean files in the specified path
});


// styles
gulp.task("styles", function () {
    return gulp
        .src(path.src.styles)
        .pipe(sourcemaps.init()) // Initialize sourcemaps
        .pipe(
            sass({
                outputStyle: "compressed",
            }).on("error", sass.logError)
        ) // Compile SASS to CSS
        .pipe(
            postcss([
                autoprefixer({
                    overrideBrowserslist: [
                        'chrome >= 118',    // Released October 2024
                        'firefox >= 119',   // Released November 2024
                    ]
                }),  // Apply Autoprefixer
                // cssnano() // Further minify CSS using PostCSS
            ])
        )
        // .pipe(cleanCSS({compatibility: 'ie8', level: {1: {specialComments: 0}}})) // Minify and Remove comments
        .pipe(sourcemaps.write(".")) // Write sourcemaps to the same directory
        .pipe(gulp.dest(path.build.styles))
        .pipe(
            browserSync.reload({
                stream: true,
            })
        );
});

// scripts
gulp.task("scripts", function () {
  return gulp
    .src(path.src.scripts)
    .pipe(jshint(".jshintrc"))
    .pipe(jshint.reporter(jshintStylish))
    .pipe(
        babel({
            presets: [
                [
                    '@babel/preset-env', 
                    {
                        targets: {
                            browsers: [
                                'ie >= 8', // Released in 2009
                                'chrome >= 4', // Released in 2010
                                'firefox >= 3.6', // Released in 2010
                                'safari >= 4', // Released in 2009 
                                'opera >= 10.5' // Released in 2010
                                
                                // 'ie >= 11', // Released in 2013
                                // 'chrome >= 50', // Released in 2016
                                // 'firefox >= 45', // Released in 2016
                                // 'safari >= 9', // Released in 2015
                                // 'opera >= 37' // Released in 2016
                            ]
                        }
                    }
                ]
            ],
            comments: false, // remove comments
            compact: true, // Uncomment to enable compact output
            minified: true,
        })
    ) // Transpile the scripts using Babel
    .pipe(gulp.dest(path.build.scripts))
    .pipe(
      browserSync.reload({
        stream: true,
      })
    );
});

// Plugins
gulp.task("plugins", function () {
  return gulp
    .src(path.src.plugins)
    .pipe(gulp.dest(path.build.plugins))
    .pipe(
      browserSync.reload({
        stream: true,
      })
    );
});

// Watch Task
gulp.task("watch", function () {
    gulp.watch(path.src.pages).on('change', browserSync.reload);
    gulp.watch(path.src.styles, gulp.parallel("styles"));
    // gulp.watch(path.src.scripts, gulp.parallel("scripts"));
    gulp.watch(path.src.plugins, gulp.parallel("plugins"));
});

// dev Task
gulp.task(
    "dev",
    gulp.series(
        "clean",
        "styles",
        // "scripts",
        // "plugins",
        // gulp.parallel("watch", "serve")
        gulp.parallel("watch")
    )
);

// Build Task
gulp.task(
    "build",
    gulp.series(
            "clean",
            "styles",
            // "scripts",
            // "plugins"
        )
);

// // Deploy Task
// gulp.task(
//     "deploy",
//     gulp.series("styles", "scripts", "plugins")
// );
