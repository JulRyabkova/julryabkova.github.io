var gulp = require('gulp');
var imagemin = require('gulp-imagemin');
var htmlmin = require('gulp-htmlmin');
var cleanCSS = require('gulp-clean-css');


gulp.task('gulp-imagemin', function(){
 return gulp.src('app/img/**/**/*')
 	.pipe(imagemin())
 	.pipe(gulp.dest('img/'));
});

gulp.task('gulp-htmlmin', function() {
  return gulp.src('app/*.html')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('../Nevsky/'));
});

gulp.task('default', function() {
  return gulp.src('app/*.css')
    .pipe(cleanCSS())
    .pipe(gulp.dest('css/'));
});