var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var plumber = require('gulp-plumber');
var livereload = require('gulp-livereload');
var minifyCSS = require('gulp-minify-css');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var preprocess = require('gulp-preprocess');

/////////////////////////////////
//libguides

gulp.task('libguide', function() {
  gulp.src('./shared_content/shared_header.php')
  .pipe(preprocess( 
    {context: 
      { 
        ENV_VAR: 'libguide', 
        IMAGE_DIR: 'http://www.library.illinois.edu/assets/',
        DEBUG: true
      }
    }))  
  .pipe(gulp.dest('./libguide/'));

  gulp.src('./shared_content/shared_footer.php')
  .pipe(preprocess( 
    {context: 
      { 
        ENV_VAR: 'libguide', 
        IMAGE_DIR: 'http://www.library.illinois.edu/assets/',
        DEBUG: true
      }
  })) 
  .pipe(gulp.dest('./libguide/'));

  gulp.src( './shared_content/libguide-style.scss')
  .pipe(plumber( { errorHandler: onError }))
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(gulp.dest('./libguide/'))
});


////////////////////////////////

gulp.task('header', function() {
  gulp.src('./shared_content/shared_header.php')
    .pipe(preprocess( 
      {context: 
        { 
          ENV_VAR: 'gateway', 
          SEARCH_ACTION: 'search.php',
          IMAGE_DIR: './assets/',
          DEBUG: true
        }
      })) 
    .pipe(gulp.dest('.'));
});

gulp.task('footer', function() {
  gulp.src('./shared_content/shared_footer.php')
    .pipe(preprocess( 
      {context: 
        { 
          ENV_VAR: 'gateway', 
          IMAGE_DIR: './assets/',
          DEBUG: true
        }
      })) 
    .pipe(gulp.dest('.'));
});

script_array = [
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
  './assets/js/accordion-tab-support.js'
  ];

css_array = [
  './bower_components/normalize.css/normalize.css',
  './assets/css/style.css',
  './assets/css/jquery-ui.min.css',
  './assets/css/bootstrap-accessibility.css',
  './assets/css/columnselect.css',
  './bower_components/fontawesome/css/font-awesome.css'
  ];

var onError = function( err ) {
  console.log( 'An error occurred:', err.message );
  this.emit( 'end' );
}

gulp.task('default', ['sass','scripts','php','watch'], function() {});

gulp.task('php', function() {
	gulp.src('./*.php')
	.pipe(livereload());
});

gulp.task('css', function() {
  gulp.src( css_array )
  .pipe(concat('style.css'))
  .pipe(autoprefixer())
  .pipe(gulp.dest('./assets/built/'))
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

gulp.task('watchsass', function () {
  livereload.listen();
  gulp.watch('./sass/**/*.scss', [ 'sass' ] );
  gulp.watch('./assets/css/*.css', [ 'css' ] );

});

gulp.task('watch', function () {
  livereload.listen();
  gulp.watch('./sass/**/*.scss', [ 'sass' ] );
	gulp.watch('./*.php', [ 'php' ]);
  gulp.watch('./assets/css/*.css', [ 'css' ] );
  gulp.watch('./assets/js/*.js', [ 'scripts' ] );
});

gulp.task('scripts', function() {
  return gulp.src( script_array )
  .pipe(concat('scripts.js'))
	//.pipe(uglify())
  .pipe(gulp.dest('./assets/built/'))
  .pipe( livereload() );
});

//gulp.task('build', ['sass-css-build','scripts-build','scripts-unmin'], function() {});
gulp.task('build', ['css-concat-unmin','scripts-build','scripts-unmin'], function() {});

gulp.task( 'css-sass-build', function() {
  var stream = gulp.src('./sass/*.scss')
    .pipe(plumber( { errorHandler: onError }))
    //.pipe(sourcemaps.init())
    .pipe(sass())
    //.pipe(sourcemaps.write())
    .pipe(gulp.dest('./assets/css/'));
  return stream; 
})
gulp.task( 'css-concat-built', ['css-sass-build'], function() {
  var stream = gulp.src( css_array )
    .pipe(concat('style.css'))
    .pipe(autoprefixer())
    //.pipe(minifyCSS({advanced:false,keepSpecialComments:0}))
    .pipe(minifyCSS())
    .pipe(gulp.dest('./assets/built/'));
  return stream; 
})
gulp.task( 'css-concat-unmin', ['css-concat-built'], function() {
  var stream = gulp.src( css_array )
    .pipe(concat('style.css'))
    .pipe(autoprefixer())
    //.pipe(minifyCSS())
    .pipe(gulp.dest('./assets/unmin/'));
  return stream; 
})

gulp.task('scripts-build', function() {
  gulp.src( script_array )
  .pipe(concat('scripts.js'))
  .pipe(uglify())
  .pipe(gulp.dest('./assets/built/'));
});

gulp.task('scripts-unmin', function() {
  gulp.src( script_array )
  .pipe(concat('scripts.js'))
  //.pipe(uglify())
  .pipe(gulp.dest('./assets/unmin/'));
});


