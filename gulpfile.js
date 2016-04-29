var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var rename = require('gulp-rename');
var jade = require('gulp-jade');
var affected = require('gulp-jade-find-affected');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');

gulp.task('jade', function() {  
  gulp.src('./src/canvas/**/*.jade')
    .pipe(affected())
    .pipe(jade({
      pretty: true
    }))
    .pipe(gulp.dest('./dist/'))
    .pipe(browserSync.stream());
});

gulp.task('sass', function () {
  gulp.src('./src/brand/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cssnano())
    .pipe(rename({
      suffix: '.min'
    }))
  .pipe(gulp.dest('./dist/css'))
  .pipe(browserSync.stream());
});

gulp.task('browser-sync', function() {  
    browserSync.init({
      ghostMode: false,
      notify: false,
      reloadDelay: 500,
       server: {
          baseDir: './dist'
       }
    });
});

gulp.task('watch', function () {
  gulp.watch('./src/brand/**/*.scss', ['sass']);
  gulp.watch('./src/canvas/**/*.jade', ['jade']);
});

gulp.task('default', ['jade','sass','watch','browser-sync']);