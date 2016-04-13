var autoprefixer    = require('gulp-autoprefixer');
var concat          = require('gulp-concat');
var cssnano         = require('gulp-cssnano');
var decomment       = require('gulp-strip-comments');
var del             = require('del');
var filter          = require('gulp-filter');
var gulp            = require('gulp');
var gulpif          = require('gulp-if');
var livereload      = require('gulp-livereload');
var plumber         = require('gulp-plumber');
var preprocess      = require('gulp-preprocess');
var rev             = require('gulp-rev');
var revReplace      = require("gulp-rev-replace");
var runSequence     = require('run-sequence');
var sass            = require('gulp-sass');
var sourcemaps      = require('gulp-sourcemaps');
var streamqueue     = require('streamqueue');
var uglify          = require('gulp-uglify');
var watch           = require('gulp-watch');

//environment variable to be used by gulp-if plugin
// for build tasks.  determines whether minification tasks
// will run or not
var production = true;

gulp.task( 'build:prod', function(cb) {
  production = true;
  runSequence( 'clean', copyArray, 'style', 'script', 'header-footer-rev-replace' );
});

gulp.task( 'build:dev', function(cb) {
  production = false;
  runSequence( 'clean', copyArray, 'style', 'script', 'header-footer-rev-replace' );
});

var copyArray = [ 
'copy:fonts', 
'copy:images',
'copy:shared-images', 
'copy:utility', 
'copy:ga', 
'copy:jq-ui-images',
'copy:src'
];

gulp.task( 'copy:fonts', function() {
  return gulp.src( './shared_content/bower_components/font-awesome/fonts/*' )
  .pipe(gulp.dest( './dist/assets/fonts' ));
});
gulp.task( 'copy:images', function() {
  return gulp.src( './assets/images/**/*' )
  .pipe(gulp.dest( './dist/assets/images' ));
})
gulp.task( 'copy:shared-images', function() {
  return gulp.src( './shared_content/assets/images/*' )
  .pipe(gulp.dest( './dist/assets/images' ));
});
gulp.task( 'copy:utility', function() {
  return gulp.src( './assets/js/utilities/*' )
  .pipe(gulp.dest( './dist/assets/js' ));
});
gulp.task( 'copy:ga', function() {
  return gulp.src( './assets/js/ga/*')
  .pipe(gulp.dest( './dist/assets/js/ga'));
});
//copy jquery ui images for datepicker in library hours
gulp.task( 'copy:jq-ui-images', function() {
  return gulp.src( './assets/css/images/*')
  .pipe(gulp.dest( './dist/assets/css/images'));
});
gulp.task( 'copy:src', function() {
  return gulp.src( [ './src/robots.txt', './src/proxies/*' ], { base: './src' } )
  .pipe(gulp.dest( './dist' ));
})


//clean:dist tasks deletes all contents of /dist 
//directory before build to prevent files 
//that have been deleted from  source directories 
//remaining in the dist directory
gulp.task( 'clean', function() {
  return del(['./dist/*', './unmin/*']);
});

gulp.task( 'header-footer-rev-replace', function() {
  var manifest = gulp.src( './unmin/rev-manifest.json' );
  return gulp.src( [ './src/index.php', './src/search.php', './src/hours.php' ], { base: './src' } )
  .pipe(preprocess(
    {context: 
        { 
          ENV_VAR: 'gateway', 
          SEARCH_ACTION: 'search.php',
          IMAGE_DIR: './assets/images/',
          DEBUG: true
        }
      }))
  .pipe(decomment({ safe: true }))
  .pipe(revReplace({ 
    manifest: manifest,
    replaceInExtensions: '.php'
    }))
  .pipe(gulp.dest( './dist'));
});



gulp.task( 'style', function() {
  return streamqueue( { objectMode: true }, 
    gulp.src( './sass/style.scss' )
    .pipe(plumber( { errorHandler: onError }))
    .pipe(gulpif( !production, sourcemaps.init()))
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulpif( !production, sourcemaps.write())),

    //fa-replace rewrites the file paths in the
    // font-awesome css file to refer to the correct
    // fonts path relative to wordpress style.css
    gulp.src( css_array )
  )
  .pipe(concat('style.css'))
  .pipe(gulp.dest( './unmin' ))
  .pipe(gulpif( production, cssnano()))
  .pipe(gulpif( production, rev()))
  .pipe(gulp.dest( './dist/assets/css'))
  .pipe(gulpif( production, rev.manifest()))
  .pipe(gulpif( production, gulp.dest('./unmin')))
  .pipe( livereload() );
});


gulp.task( 'script', function() {
  return gulp.src( script_array )
  .pipe(concat( 'script.js'))
  .pipe(gulp.dest( './unmin' ))
  .pipe(gulpif( production, uglify()))
  .pipe(gulpif( production, rev()))
  .pipe(gulp.dest( './dist/assets/js' ))
  .pipe(gulpif( production, rev.manifest( './unmin/rev-manifest.json', {
    base: './unmin',
    merge: true 
  })))
  .pipe(gulpif( production, gulp.dest('./unmin')))
  .pipe( livereload() );
});


var script_array = [
  './assets/js/utilities.js',
  './assets/js/alert.js', 
  './bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
  './assets/js/bootstrap-accessibility.js',
  './assets/js/jquery-ui.min.js',
  './assets/js/off-canvas.js',
  './assets/js/roomreserve.js',
  './assets/js/hours.js',
  './assets/js/bourbon-accordion-tabs.js',
  './assets/js/orange_bar_scroll.js', 
  './assets/js/jquery.fracs-0.15.0.min.js',
  './assets/js/easy_search_text.js',
  './assets/js/easy-search-form-select.js',
  './assets/js/libguide-search.js',
  './assets/js/news-events.js',
  './assets/js/loan-tech.js',
  './assets/js/accordion-tab-support.js',
  './assets/js/global-access.js',
  './assets/js/fix_emergency_alert.js',
  './assets/js/hours_page.js'
  ];


var css_array = [
  './bower_components/normalize.css/normalize.css',
  './assets/css/style.css',
  './assets/css/jquery-ui.min.css',
  './assets/css/bootstrap-accessibility.css',
  './assets/css/columnselect.css',
  './bower_components/fontawesome/css/font-awesome.css',
  './assets/css/fix_emergency_alert.css',
  './assets/css/hours_page.css'
  ];


var onError = function( err ) {
  console.log( 'An error occurred:', err.message );
  this.emit( 'end' );
};

//////////////////////////////////////
//development tasks
//////////////////////////////////////

gulp.task('default', ['sass','scripts','php','watch'], function() {});

gulp.task('css', function() {
  gulp.src( css_array )
  .pipe(concat('style.css'))
  .pipe(autoprefixer())
  .pipe(gulp.dest('./assets/built/'))
  .pipe(livereload());
});

gulp.task('php', function() {
  gulp.src('./*.php')
  .pipe(livereload());
});

gulp.task('sass', function () {
  gulp.src('./sass/*.scss')
  .pipe(plumber( { errorHandler: onError }))
  .pipe(sourcemaps.init())
  .pipe(sass())
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('./assets/css/'))
  .pipe( livereload() );
});

gulp.task('scripts', function() {
  return gulp.src( script_array )
  .pipe(concat('scripts.js'))
  //.pipe(uglify())
  .pipe(gulp.dest('./assets/built/'))
  .pipe( livereload() );
});

gulp.task('watch', function () {
  livereload.listen();
  gulp.watch('./sass/**/*.scss', [ 'sass' ] );
	gulp.watch('./**/*.php', [ 'php' ]);
  gulp.watch('./assets/css/*.css', [ 'css' ] );
  gulp.watch('./assets/js/*.js', [ 'scripts' ] );
  gulp.watch('./shared_content/shared_header.php', [ 'header' ] );
  //gulp.watch('./shared_content/shared_navbar.php', [ 'navbar' ] );
  gulp.watch('./shared_content/shared_footer.php', [ 'footer' ] );
});
