const gulp = require('gulp'),
  sass = require('gulp-sass'),
  concat = require('gulp-concat'),
  postcss = require('gulp-postcss'),
  autoprefixer = require('autoprefixer'),
  cssnano = require('cssnano'),
  sourcemaps = require('gulp-sourcemaps'),
  browserSync = require('browser-sync').create(),
  paths = {
    style: {
      src: 'assets/css/scss/*.scss',
      dest: './'
    }
  };

const style = () => {
  return gulp.src(paths.style.src)
    .pipe(sourcemaps.init())

    // Use sass with the files found, and log any errors
    .pipe(sass()).on('error', sass.logError)

    .pipe(postcss([
      autoprefixer(),
      cssnano()
    ]))

    .pipe(sourcemaps.write())
    .pipe(concat('style.css'))
    .pipe(gulp.dest(paths.style.dest))
    .pipe(browserSync.stream())
}

const reload = () => browserSync.reload();

const watch = () => {
  style()
  browserSync.init({
    proxy: 'http://localhost:8888/'
    // If you are already serving your website locally using something like apache
    // You can use the proxy setting to proxy that instead
    // proxy: "yourlocal.dev"
  })
  gulp.watch(paths.style.src, style)
  gulp.watch('/*.php', reload)
}

exports.style = style
exports.watch = watch
