'use strict';

const

  // Plugins
  gulp = require('gulp'),
  sass = require('gulp-sass'),

  paths = {
    styles: {
      src: "scss/**/*.scss",
      dest: "build"
    }
  };

function style() {
  return (
    gulp
      .src(paths.styles.src)
      .pipe(sass())
      .on("error", sass.logError)
      .pipe(gulp.dest(paths.styles.dest))
  );
}

function watch() {
  style();
  gulp.watch(paths.styles.src, style)
}

exports.style = style;
exports.watch = watch;