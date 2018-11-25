
// Plugins
const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const sourcemaps = require('gulp-sourcemaps');
const eslint = require('gulp-eslint');
const plumber = require('gulp-plumber');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');
const csso = require('gulp-csso');

const paths = {
  styles: {
    src: 'scss/**/*.scss',
  },
  dest: './',
  js: 'js/**/*.js',
  home: 'index.php',
};

const browserSync = require('browser-sync').create();

function style() {
  return (
    gulp
      .src(paths.styles.src)
      .pipe(sourcemaps.init())
      .pipe(sass())
      .pipe(concat('style.css'))
      .on('error', sass.logError)
      .pipe(rename('style.min.css'))
      .pipe(csso())
      .pipe(postcss([autoprefixer(), cssnano()]))
      .pipe(sourcemaps.write())
      .pipe(gulp.dest(paths.dest))
      .pipe(browserSync.stream())
  );
}

function scriptsLint() {
  return gulp
    .src([paths.js, `${paths.dest}gulpfile.js`])
    .pipe(plumber())
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(eslint.failAfterError());
}

function scripts() {
  return gulp
    .src(paths.js)
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest(paths.dest))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(paths.dest));
}

gulp.task('js', gulp.series(scriptsLint, scripts));

function reload() {
  browserSync.reload();
}

function watch() {
  browserSync.init({
    proxy: 'localhost:8888',
  });
  style();
  gulp.watch(paths.styles.src, style);
  gulp.watch(paths.home, reload);
}

gulp.task('default', gulp.series(style, scriptsLint, scripts, watch));

exports.style = style;
exports.watch = watch;
