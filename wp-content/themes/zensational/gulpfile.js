var gulp = require('gulp');
var sass = require('gulp-sass');
var sassLint = require('gulp-sass-lint');
var imagemin = require('gulp-imagemin');
var plumber = require('gulp-plumber');
var $ = require('gulp-load-plugins')();
var concat = require('gulp-concat');

gulp.task('scss', function() {
    gulp.src('scss/**/*.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('css/'));
});

gulp.task('scss-lint', function () {
    return gulp.src('scss/**/*.scss')
        .pipe(sassLint())
        .pipe(sassLint.format())
        .pipe(sassLint.failOnError())
});

gulp.task('image', function () {
    gulp.src('images/**/*.{png,jpg,gif}')
        .pipe($.plumber())
        .pipe($.imagemin({optimizationLevel: 5}))
        .pipe(gulp.dest('images'));
});

gulp.task('watch', function() {
    gulp.watch('scss/**/*.scss',['scss']);

});

gulp.task('default',function() {
    gulp.watch('scss/**/*.scss',['scss']);
});