var gulp = require('gulp');
var plumber = require('gulp-plumber');
var rename = require('gulp-rename');
var less = require('gulp-less');
var autoPrefixer = require('gulp-autoprefixer');
//if node version is lower than v.0.1.2
require('es6-promise').polyfill();
var cssComb = require('gulp-csscomb');
var cmq = require('gulp-merge-media-queries');
var cleanCss = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var minifyHtml = require('gulp-minify-html');
var imageMin = require('gulp-imagemin');
var cache = require('gulp-cache');
var notify = require('gulp-notify');
var del = require('del');
gulp.task('less',function(){
    gulp.src(['src/css/**/*.less'])
        .pipe(plumber({
            handleError: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(less())
        .pipe(autoPrefixer())
        .pipe(cssComb())
        .pipe(cmq({log:true}))
        .pipe(concat('style.css'))
        .pipe(gulp.dest('dist/css'))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(cleanCss())
        .pipe(gulp.dest('dist/css'))
        .pipe(notify('css task finished'))
});
gulp.task('js',function(){
    gulp.src(['src/js/**/*.js'])
        .pipe(plumber({
            handleError: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(concat('main.js'))
        .pipe(gulp.dest('dist/js'))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'))
          .pipe(notify('js task finished'))
});
gulp.task('html',function(){
    gulp.src(['html/**/*.html'])
        .pipe(plumber({
            handleError: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(minifyHtml())
        .pipe(gulp.dest('./'))
        .pipe(notify('html task finished'))
});
gulp.task('image',function(){
    gulp.src(['src/images/**/*'])
        .pipe(plumber({
            handleError: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(cache(imageMin()))
        .pipe(gulp.dest('dist/images'))
        .pipe(notify('image task finished'))
});
gulp.task('clean', function() {
    return del(['dist/css', 'dist/js', 'dist/images']);
});
gulp.task('default', ['clean'], function(){
    gulp.start('less','js','html','image');

    gulp.watch('src/js/**/*.js',['js']);
    gulp.watch('src/css/**/*.less',['less']);
    gulp.watch('html/**/*.html',['html']);
    gulp.watch('src/images/**/*',['image']);
});
