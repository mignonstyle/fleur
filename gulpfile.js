// $ npm install --save-dev gulp
// $ npm run build

var gulp           = require('gulp');

// Sass,CSS
//----------------------
var sass           = require('gulp-sass');
var sassLint       = require('gulp-sass-lint');
// var csso           = require('gulp-csso');
var postcss        = require('gulp-postcss');
var cssnano        = require('cssnano');
var autoprefixer   = require('autoprefixer');
var doiuse         = require('doiuse');
var mqpacker       = require('css-mqpacker');

// JavaScript
//--------------------
var jscs           = require('gulp-jscs');
var jshint         = require('gulp-jshint');
var stylish        = require('jshint-stylish');
var uglify         = require('gulp-uglify');

// utility
//--------------------
var rename         = require('gulp-rename');
var watch          = require('gulp-watch');
var plumber        = require('gulp-plumber');
var runSequence    = require('run-sequence');
var concat         = require('gulp-concat');
var browserSync    = require('browser-sync');

// ------------------------------------------------
// Auto-polyfill
// Corrective action due to travis error in autoprefixer.
// ------------------------------------------------
require('es6-promise').polyfill();

// ------------------------------------------------
// Browsers setting
// ------------------------------------------------
var browsers = [
	'last 2 version',
	'> 50%'
];


gulp.task( 'default', function () {

} );
