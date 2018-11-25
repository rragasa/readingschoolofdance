'use strict';

const

  // Plugins
  gulp = require('gulp'),
  sass = require('gulp-sass'),
  concat = require('gulp-concat'),
  postcss = require("gulp-postcss"),
  autoprefixer = require("autoprefixer"),
  cssnano = require("cssnano"),
  sourcemaps = require("gulp-sourcemaps"),

  paths = {
    styles: {
      src: "scss/**/*.scss",
      dest: "./"
    },
    home: "index.php"
  };

let browserSync = require("browser-sync").create();

function style() {
  return (
    gulp
      .src(paths.styles.src)
      .pipe(sourcemaps.init())
      .pipe(sass())
      .pipe(concat('style.css'))
      .on("error", sass.logError)
      .pipe(postcss([autoprefixer(), cssnano()]))
      .pipe(sourcemaps.write())
      .pipe(gulp.dest(paths.styles.dest))
      .pipe(browserSync.stream())
  );
}

function reload() {
  browserSync.reload();
}

function watch() {
  browserSync.init({
    proxy: "localhost:8888"
  });
  style();
  gulp.watch(paths.styles.src, style)
  // We should tell gulp which files to watch to trigger the reload
  // This can be html or whatever you're using to develop your website
  // Note -- you can obviously add the path to the Paths object
  gulp.watch(paths.home, reload);
}

exports.style = style;
exports.watch = watch;