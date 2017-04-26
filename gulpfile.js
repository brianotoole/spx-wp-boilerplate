// Gulp config file

// Styles
var styleSRC            = './assets/scss/style.scss'; // Path to main .scss file
var styleDestination    = './'; // Path to place the compiled CSS file (theme root)

// JS
var jsCustomSRC         = './assets/js/*.js'; // Path to JS custom scripts folder
var jsCustomDestination = './assets/js/dist/'; // Path to place the compiled JS custom scripts file
var jsCustomFile        = 'build'; // Compiled JS build filename (ex = build.js)

// Watch Paths
var styleWatchFiles     = './assets/scss/**/*.scss'; // Path to all *.scss files inside css folder and inside them
var customJSWatchFiles  = './assets/js/*.js'; // Path to all custom JS files

var gulp         = require('gulp'); // Gulp of-course

// Plugins: CSS
var sass         = require('gulp-sass'); // Gulp pluign for Sass compilation
var autoprefixer = require('gulp-autoprefixer'); // Autoprefixing magic
var minifycss    = require('gulp-uglifycss'); // Minifies CSS files

// Plugins: JS
var concat       = require('gulp-concat'); // Concatenates JS files
var uglify       = require('gulp-uglify'); // Minifies JS files

// Plugins: Utilities
var rename       = require('gulp-rename'); // Renames files E.g. style.css -> style.min.css
var sourcemaps   = require('gulp-sourcemaps'); // sourcemaps
var notify       = require('gulp-notify'); // Sends message notification to you
var livereload   = require('gulp-livereload'); // Livereload

// Tasks
gulp.task('styles', function () {
 	gulp.src( styleSRC )
		.pipe( sourcemaps.init() )
		.pipe( sass( {
			errLogToConsole: true,
			outputStyle: 'compact',
			//outputStyle: 'compressed',
			// outputStyle: 'nested',
			// outputStyle: 'expanded',
			precision: 10
		} ) )
		.pipe( sourcemaps.write( { includeContent: false } ) )
		.pipe( sourcemaps.init( { loadMaps: true } ) )
		.pipe( autoprefixer(
			'last 2 version',
			'> 1%',
			'safari 5',
			'ie 8',
			'ie 9',
			'opera 12.1',
			'ios 6',
			'android 4' ) )

		.pipe( sourcemaps.write ( styleDestination ) )
		.pipe( gulp.dest( styleDestination ) )


		.pipe( rename( { suffix: '.min' } ) )
		.pipe( minifycss( {
			maxLineLen: 10
		}))
		.pipe( gulp.dest( styleDestination ) )
    .pipe(livereload())
		.pipe( notify( { message: 'TASK: "styles" Completed!', onLast: true } ) )
});


gulp.task( 'customJS', function() {
 	gulp.src( jsCustomSRC )
		.pipe( concat( jsCustomFile + '.js' ) )
		.pipe( gulp.dest( jsCustomDestination ) )
		.pipe( rename( {
			basename: jsCustomFile
			//suffix: '.min'
		}))
		.pipe( uglify() )
		.pipe( gulp.dest( jsCustomDestination ) )
    .pipe(livereload())
		.pipe( notify( { message: 'TASK: "customJs" Completed!', onLast: true } ) );
});

// Watch tasks
 gulp.task( 'default', [ 'styles', 'customJS' ], function () {
  livereload.listen();
 	gulp.watch( styleWatchFiles, [ 'styles' ] );
 	gulp.watch( customJSWatchFiles, [ 'customJS' ] );
 });
