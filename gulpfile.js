var gulp = require("gulp")
, sass = require("gulp-sass")
, uglify = require("gulp-uglify")
, concat = require('gulp-concat')
, livereload = require('gulp-livereload')
, clean = require('gulp-clean-css')
, sourcemaps = require('gulp-sourcemaps');


// uri
var uri = './content/themes/ahw/';

var paths = {
	scss: uri.concat('src/sass/**/*.scss'),
	styles: uri.concat('src/sass/styles.scss'),
	js: uri.concat('src/js/**/*.js'),
	modernizr: './modernizr.js',
	src: uri.concat('src/js'),
	dest: uri.concat('prod/')
}

// Sass to Css-min
gulp.task('styles', function() {
	gulp.src(paths.styles)
	  .pipe(sass().on('error', sass.logError))
    .pipe(clean())
	  .pipe(gulp.dest(paths.dest));
});

// Minify Css 
gulp.task('minify', function() {
  return gulp.src(paths.dest.concat('styles.css'))
    .pipe(sourcemaps.init())
    .pipe(clean())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.dest));
});

// Move Files
gulp.task('move', function() {
	gulp.src(paths.modernizr)
		  .pipe(gulp.dest(paths.src));
});

// Uglify JS
gulp.task('uglify', function() {
	gulp.src(paths.js)
		.pipe(concat('bhd-min.js'))
	  .pipe(uglify())
	  .pipe(gulp.dest(paths.dest));
});

// Watch task
gulp.task('default', function() {

	gulp.watch(paths.scss, ['styles']);
	gulp.watch(paths.js, ['uglify']);
	gulp.watch(paths.dest, ['minify']);
});

