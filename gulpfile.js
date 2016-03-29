var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {  
  return gulp.src('./src/brand/main.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./dist/css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./src/brand/main.scss', ['sass']);
});

gulp.task('default', ['sass','sass:watch']);